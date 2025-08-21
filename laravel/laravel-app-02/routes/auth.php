<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegistedUserController;
use App\Http\Controllers\TransactionController;

use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthenticatedSessionController::class, "create"])->name("login");
    Route::post("/login", [AuthenticatedSessionController::class, "store"]);

    Route::get("/register", [RegistedUserController::class, "create"])->name("register");
    Route::post("/register", [RegistedUserController::class, "store"]);
});

Route::middleware("auth")->group(function () {
    Route::post("/logout", [AuthenticatedSessionController::class, "destroy"]);

    // Account
    Route::get("/accounts", [AccountController::class, "index"]);
    Route::get("/accounts/create", [AccountController::class, "create"]);
    Route::post("/accounts", [AccountController::class, "store"]);

    // Transaction
    Route::get("/accounts/{account}/transactions", [TransactionController::class, "index"]);

    Route::get("/accounts/{account}/deposit", [TransactionController::class, "createDeposit"]);
    Route::post("/accounts/{account}/deposit", [TransactionController::class, "storeDeposit"]);

    Route::get("/accounts/{account}/withdraw", [TransactionController::class, "createWithdraw"]);
    Route::post("/accounts/{account}/withdraw", [TransactionController::class, "storeWithdraw"]);
});
