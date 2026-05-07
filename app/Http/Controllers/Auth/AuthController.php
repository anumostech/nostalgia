<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\OtpService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $otpService;

    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    public function showRegister()
    {
        if (Auth::check()) {
            return Auth::user()->isAdmin() 
                ? redirect()->route(\App\Constants\RouteNames::DASHBOARD)
                : redirect()->route(\App\Constants\RouteNames::HOME);
        }
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password, // Mutator in User model will hash it
            'type' => 'customer',
            'status' => 'inactive', // inactive until verified
            'is_verified' => false,
        ]);

        $this->otpService->sendOtp($user);

        return redirect()->route(\App\Constants\RouteNames::OTP_VERIFY, ['user_id' => $user->id])
            ->with('success', 'Registration successful! Please verify your OTP.');
    }

    public function showLogin()
    {
        if (Auth::check()) {
            return Auth::user()->isAdmin() 
                ? redirect()->route(\App\Constants\RouteNames::DASHBOARD)
                : redirect()->route(\App\Constants\RouteNames::HOME);
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        if (Auth::attempt([$loginType => $request->login, 'password' => $request->password])) {
            $user = Auth::user();

            if (!$user->is_verified) {
                $this->otpService->sendOtp($user);
                Auth::logout();
                return redirect()->route(\App\Constants\RouteNames::OTP_VERIFY, ['user_id' => $user->id])
                    ->with('warning', 'Please verify your account first.');
            }

            if ($user->isAdmin()) {
                return redirect()->route(\App\Constants\RouteNames::DASHBOARD);
            }

            return redirect()->intended(route(\App\Constants\RouteNames::HOME));
        }

        return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route(\App\Constants\RouteNames::LOGIN);
    }

    public function showOtpLogin()
    {
        return view('auth.otp-login');
    }

    public function sendLoginOtp(Request $request)
    {
        $request->validate(['login' => 'required|string']);
        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        
        $user = User::where($loginType, $request->login)->first();
        
        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $this->otpService->sendOtp($user, 'login');
        
        return redirect()->route(\App\Constants\RouteNames::OTP_VERIFY, ['user_id' => $user->id, 'type' => 'login'])
            ->with('success', 'OTP sent to your email/phone.');
    }

    public function showVerifyOtp(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);
        $type = $request->type ?? 'verification';
        return view('auth.verify-otp', compact('user', 'type'));
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required|string|size:6',
        ]);

        $user = User::findOrFail($request->user_id);
        $type = $request->type ?? 'verification';

        if ($this->otpService->verifyOtp($user, $request->otp, $type)) {
            $user->update([
                'status' => 'active',
                'is_verified' => true,
                'phone_verified_at' => now(),
            ]);

            Auth::login($user);

            return redirect()->route(\App\Constants\RouteNames::HOME)
                ->with('success', 'Account verified successfully!');
        }

        return redirect()->back()->with('error', 'Invalid or expired OTP.');
    }

    public function resendOtp(Request $request)
    {
        $request->validate(['user_id' => 'required|exists:users,id']);
        $user = User::findOrFail($request->user_id);
        $type = $request->type ?? 'verification';

        $this->otpService->sendOtp($user, $type);

        return redirect()->back()->with('success', 'A new OTP has been sent.');
    }
}
