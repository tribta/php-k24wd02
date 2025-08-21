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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId("user_id")->constrained()->cascadeOnDelete();

            // mã account
            $table->string('number', 32)->unique();

            $table->string('name', 100);

            $table->string('currency', 3)->default('VND');

            $table->decimal('balance', 19, 4)->default(0);
            
            $table->index('user_id', 'currency');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
