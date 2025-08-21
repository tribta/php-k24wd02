<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("account_id")->constrained()->cascadeOnDelete();

            $table->enum('type', ['deposit', 'withdraw']);

            $table->decimal('amount', 19, 4);
            $table->decimal('balance_after', 19, 4);
            $table->string('memo', 255)->nullable();

            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();

            $table->index(['account_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
