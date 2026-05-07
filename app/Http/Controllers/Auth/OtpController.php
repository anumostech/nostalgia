<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
    protected $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function showVerify(Request $request, $user_id)
    {
        $type = $request->type ?? 'verification';
        $user = User::findOrFail($user_id);

        return view('auth.verify-otp', compact('user', 'type'));
    }

    public function verify(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required|string|size:6',
            'type' => 'required|string',
        ]);

        $user = User::findOrFail($request->user_id);
        
        if ($this->otpService->verifyOtp($user, $request->otp, $request->type)) {
            
            if ($request->type === 'verification') {
                $user->update([
                    'is_verified' => true,
                    'status' => 'active',
                    'email_verified_at' => now(),
                    'phone_verified_at' => now()
                ]);
                Auth::login($user);
                return redirect()->route(\App\Constants\RouteNames::HOME)->with('success', 'Account verified and logged in!');
            }

            if ($request->type === 'login') {
                $user->update([
                    'is_verified' => true,
                    'status' => 'active',
                ]);
                Auth::login($user);
                return redirect()->intended(route(\App\Constants\RouteNames::HOME))->with('success', 'Logged in successfully!');
            }

            if ($request->type === 'password_reset') {
                // Handle password reset redirection
                return redirect()->route(\App\Constants\RouteNames::RESET_PASSWORD, ['user_id' => $user->id, 'token' => $request->otp]);
            }
        }

        return redirect()->back()->with('error', 'Invalid or expired OTP.');
    }

    public function resend(Request $request)
    {
        $request->validate(['user_id' => 'required|exists:users,id']);
        
        $user = User::findOrFail($request->user_id);
        $type = $request->type ?? 'verification';

        // Add rate limiting logic here if needed (e.g. check last OTP timestamp)

        $this->otpService->sendOtp($user, $type);

        return redirect()->back()->with('success', 'A new OTP has been sent.');
    }
}
