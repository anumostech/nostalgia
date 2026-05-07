<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Constants\RouteNames;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Show login page
     */
    public function showLogin()
    {
        // If already logged in as admin, redirect
        if (Auth::guard('admin')->check()) {
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
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|min:8',
        ]);

        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        // Attempt login using admin guard
        if (Auth::guard('admin')->attempt([$loginType => $request->login, 'password' => $request->password])) {
            $user = Auth::guard('admin')->user();
            
            // Security check: Ensure the user is actually an admin
            if (!$user->isAdmin()) {
                Auth::guard('admin')->logout();
                return back()->withErrors(['login' => 'Access denied. You do not have administrator privileges.']);
            }

            $request->session()->regenerate(); 
            return redirect()->intended(route(RouteNames::DASHBOARD));
        }

        // Login failed
        return back()->withErrors([
            'login' => 'Invalid email or password.',
        ])->withInput();
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route(RouteNames::ADMIN_LOGIN);
    }

    /**
     * Show forgot password page
     */
    public function showForgotPassword()
    {
        return view('admin.auth.forgot-password');
    }

    /**
     * Send reset code to email
     */
    public function sendResetCode(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $code = rand(100000, 999999);
        
        // Store code in session for simplicity in this demo (or use DB table)
        Session::put('reset_code', $code);
        Session::put('reset_email', $request->email);

        // Send Email
        Mail::raw("Your password reset code is: $code", function ($message) use ($request) {
            $message->to($request->email)->subject('Password Reset Code');
        });

        return redirect()->route(RouteNames::ADMIN_RESET_PASSWORD)->with('success', 'Reset code sent to your email.');
    }

    /**
     * Show reset password page
     */
    public function showResetPassword()
    {
        if (!Session::has('reset_code')) {
            return redirect()->route(RouteNames::ADMIN_FORGOT_PASSWORD);
        }
        return view('admin.auth.reset-password');
    }

    /**
     * Reset password logic
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'code'     => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($request->code != Session::get('reset_code')) {
            return back()->withErrors(['code' => 'Invalid verification code.']);
        }

        $user = User::where('email', Session::get('reset_email'))->first();
        $user->update(['password' => $request->password]);

        Session::forget(['reset_code', 'reset_email']);

        return redirect()->route(RouteNames::ADMIN_LOGIN)->with('success', 'Password reset successfully.');
    }
}
