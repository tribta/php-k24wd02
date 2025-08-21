<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'account_id',
        'type',
        'amount',
        'balance_after',
        'memo',
        'created_by'
    ];

    protected $casts = ['amount' => 'decimal:4', 'balance_after' => 'decimal:4'];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
