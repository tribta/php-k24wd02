<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegistedUserController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthenticatedSessionController::class, "create"])->name("login");
    Route::post("/login", [AuthenticatedSessionController::class, "store"]);

    Route::get("/register", [RegistedUserController::class, "create"])->name("register");
    Route::post("/register", [RegistedUserController::class, "store"]);
});

Route::post("/logout", [AuthenticatedSessionController::class, "destroy"])->middleware("auth");
