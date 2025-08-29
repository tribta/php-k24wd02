<?php

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel(
    'conversation.{conversationId}',
    function (User $user, int $conversationId) {
        return Conversation::whereKey($conversationId)
            ->whereHas('users', fn($q) => $q->whereKey($user->id))
            ->exists();
    }
);
