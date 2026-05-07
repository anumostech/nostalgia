<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsVerified
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && !Auth::user()->is_verified && !Auth::user()->isAdmin()) {
            // Log out user and redirect to OTP verification
            $user = Auth::user();
            Auth::logout();
            
            return redirect()->route('otp.verify', ['user_id' => $user->id])
                ->with('warning', 'Please verify your account to continue.');
        }

        return $next($request);
    }
}
