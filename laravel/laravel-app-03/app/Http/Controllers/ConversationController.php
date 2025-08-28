<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ConversationController extends Controller
{
    public function index(Request $request): Response
    {
        $user = $request->user();

        $conversations = $user->conversations()
            ->with(['lastMessage.user:id,name'])
            ->orderByDesc('updated_at')
            ->get();

        $users = User::query()
            ->where('id', '<>', $user->id)
            ->select('id', 'name', 'email')
            ->orderBy('name')
            ->limit(10)
            ->get();

        return Inertia::render('Chat/Index', [
            'conversations' => $conversations,
            'users' => $users
        ]);
    }

    public function show(Request $request, Conversation $conversation): Response
    {
        $userId = $request->user()->id;
        abort_unless($conversation->isParticipant($userId), 403);

        $messages = $conversation->messages()
            ->with('user:id,name,email')
            ->orderBy('created_at')
            ->paginate(50);

        $conversations = $request->user()
            ->conversations()
            ->with(['lastMessage.user:id,name'])
            ->orderByDesc('updated_at')->get();

        return Inertia::render('Chat/Show', [
            'conversation' => $conversation
                ->only(['id', 'name', 'is_direct']),
            'messages' => $messages,
            'conversations' => $conversations
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $userId = $request->user()->id;

        $data = $request->validate([
            'user_ids' => ['required', 'array', 'min:1'],
            'name' => ['required', 'string', 'max:255'],
            'user_ids.*' => ['integer', 'exists:users,id', 'different:' . $userId],
        ]);

        $isDirect = count($data['user_ids']) === 1;
        $conversation = Conversation::create([
            'is_direct' => $isDirect,
            'name' => $isDirect ? null : ($data['name'] ?? null),
            'created_by' => $userId
        ]);
        $conversation->users()->sync(array_unique([...$data['user_ids'], $userId]));
        return redirect()->route('chat.show', $conversation);
    }
}
