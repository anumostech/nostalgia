<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Constants\RouteNames;

class AuthController extends Controller
{
    /**
     * Show login page
     */
    public function showLogin()
    {
        // If already logged in, redirect
        if (Auth::check()) {
            return redirect()->route(RouteNames::DASHBOARD);
        }

        return view('admin.login');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return redirect()->intended(route(RouteNames::DASHBOARD));
        }

        // Login failed
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput();
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route(RouteNames::LOGIN);
    }
}
