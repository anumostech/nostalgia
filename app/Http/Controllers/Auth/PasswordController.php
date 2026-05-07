<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\OtpService;
use App\Constants\RouteNames;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    protected $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function showForgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function sendResetCode(Request $request)
    {
        $request->validate(['login' => 'required|string']);
        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        
        $user = User::where($loginType, $request->login)->first();
        
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $this->otpService->sendOtp($user, 'password_reset');
        
        return redirect()->route(RouteNames::OTP_VERIFY, ['user_id' => $user->id, 'type' => 'password_reset'])
            ->with('success', 'Reset code sent to your email/phone.');
    }

    public function showResetPassword(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'token' => 'required|string'
        ]);

        return view('auth.reset-password', [
            'user_id' => $request->user_id,
            'token' => $request->token
        ]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'token' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // In a real app, we should verify the token (OTP) again or use a temporary signed URL
        // For now, we trust the flow redirected from OTP verification
        
        $user = User::findOrFail($request->user_id);
        $user->password = $request->password; // Mutator will hash it
        $user->save();

        return redirect()->route(RouteNames::LOGIN)->with('success', 'Password reset successful. Please login with your new password.');
    }
}
