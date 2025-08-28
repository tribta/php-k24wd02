<?php

use App\Http\Controllers\ConversationController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    // tải về danh sách conversations
    Route::get('/chat', [ConversationController::class, 'index'])->name('chat.index');

    // xem chi tiết 1 conversation
    Route::get(
        '/chat/{conversation}',
        [ConversationController::class, 'show']
    )->name('chat.show');

    // tạo mới 1 conversation
    Route::post('/chat', [ConversationController::class, 'store'])
        ->name('chat.store');

    // gửi 1 message
    Route::post('/messages');
});
