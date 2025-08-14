<?php

use App\Http\Controllers\TestController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

Route::get("/test", [TestController::class, "index"]);
Route::get("/configTest", [TestController::class, "configTest"]);

Route::get("/users-php", function (Request $request) {
    $q = $request->query('q');

    $users = User::query()->when($q, fn($qr) => $qr
        ->where('name', 'like', "%{$q}%"))
        ->orderBy('name')
        ->get();

    return response()->view('users-php', ['users' => $users, 'q' => $q]);
});

Route::get("/counter", function () {
    return view("counter-page");
});
