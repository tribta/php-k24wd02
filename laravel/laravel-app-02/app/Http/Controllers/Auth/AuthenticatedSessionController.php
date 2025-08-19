<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    public function create(): Response
    {
        return Inertia::render("auth/Login");
    }
    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required", "string"]
        ]);
        if (! Auth::attempt($credentials, $request->boolean("remember"))) {
            return back()->withErrors(["email" => "Invalid Email Address!"])->onlyInput("email");
        }
        $request->session()->regenerate(); // tạo ra token mới để lưu phiên đăng nhập
        return redirect()->intended("/dashboard")->with("success", "Login Success!");
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/")->with("success", "Logout Success!");
    }
}
