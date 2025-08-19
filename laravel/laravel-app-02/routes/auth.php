<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegistedUserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware("guest")->group(function () {
    Route::get("/login", [AuthenticatedSessionController::class, "create"]);
    Route::post("/login", [AuthenticatedSessionController::class, "store"]);

    Route::get("/register", [RegistedUserController::class, "create"]);
    Route::post("/register", [RegistedUserController::class, "store"]);
});

Route::post("/logout", [AuthenticatedSessionController::class, "destroy"]);

Route::get("/dashboard", function () {
    return Inertia::render("Dashboard");
})->middleware("auth");
