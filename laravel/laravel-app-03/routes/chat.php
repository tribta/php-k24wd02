<?php

use App\Http\Controllers\ConversationController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    // tải về danh sách conversations
    Route::get('/chat', [ConversationController::class, 'index'])->name('chat.index');
    // xem chi tiết 1 conversation
    Route::get('/chat/{conversation}');
    // tạo mới 1 conversation
    Route::post('/chat');
    // gửi 1 message
    Route::post('/messages');
});
