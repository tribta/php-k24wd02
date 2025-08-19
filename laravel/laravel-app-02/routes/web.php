<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get("/", fn() => Inertia::render("Welcome", ['appNameFromPHP' => config("app.name", "myBank")]));

Route::get("/dashboard", function () {
    return Inertia::render("Dashboard");
})->middleware("auth");

require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';
