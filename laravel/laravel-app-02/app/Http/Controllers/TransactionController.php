<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TransactionController extends Controller
{
    public function index(Request $request, Account $account): Response
    {
        $this->authorizeAccount($request, $account);

        $txs = $account->transactions()
            ->orderBy("created_at", "desc")
            ->paginate(10, [
                'account_id',
                'type',
                'amount',
                'balance_after',
                'memo',
                'created_by'
            ]);

        return Inertia::render('Transactions/Index', ['accounts' => $account->only(
            'id',
            'number',
            'name',
            'currency',
            'balance'
        ), "transactions" => $txs]);
    }

    public function createDeposit(Request $request, Account $account): Response
    {
        $this->authorizeAccount($request, $account);
        return Inertia::render("Transactions/Deposit", ['accounts' => $account->only(
            'id',
            'number',
            'name',
            'currency',
            'balance'
        )]);
    }
    public function storeDeposit(Request $request, Account $account)
    {
        $this->authorizeAccount($request, $account);
        $data = $request->validate([
            'amount' => ['required', 'numeric', 'gt:0'],
            'memo' => ['nullable', 'string', 'max:255']
        ]);
    }

    private function authorizeAccount(Request $request, Account $account): void
    {
        if ($account->user_id !== $request->user()->id) {
            abort(403); // Unauthorization
        }
    }
}
