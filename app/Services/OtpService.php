<?php

namespace App\Services;

use App\Models\Otp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class OtpService
{
    /**
     * Generate and send OTP to user
     */
    public function sendOtp(User $user, $type = 'verification')
    {
        // Expire old unused OTPs of same type
        Otp::where('user_id', $user->id)
            ->where('type', $type)
            ->where('used', false)
            ->update(['used' => true]);

        // Generate 6 digit OTP
        $otpCode = rand(100000, 999999);
        $expiresAt = Carbon::now()->addMinutes(5);
        
        // Create OTP record in otps table
        $otp = Otp::create([
            'user_id' => $user->id,
            'otp_code' => $otpCode,
            'type' => $type,
            'expires_at' => $expiresAt,
        ]);

        // Also update users table (as requested in the task description)
        $user->update([
            'otp_code' => $otpCode,
            'otp_expires_at' => $expiresAt,
        ]);

        // Send OTP via Email
        $this->sendEmail($user, $otpCode);

        // Send OTP via SMS
        $this->sendSms($user, $otpCode);

        return $otp;
    }

    protected function sendEmail(User $user, $code)
    {
        try {
            Mail::raw("Your OTP for Nostalgia Sweets is: $code. It expires in 5 minutes.", function ($message) use ($user) {
                $message->to($user->email)
                    ->subject('Your OTP Verification Code');
            });
        } catch (\Exception $e) {
            Log::error("Failed to send OTP email to {$user->email}: " . $e->getMessage());
        }
    }

    protected function sendSms(User $user, $code)
    {
        // Mock SMS sending logic
        Log::info("MOCK SMS: Sending OTP $code to {$user->phone}");
        
        // Example with a real API like Fast2SMS or Twilio would go here
        /*
        $response = Http::post('https://www.fast2sms.com/dev/bulkV2', [
            'variables_values' => $code,
            'route' => 'otp',
            'numbers' => $user->phone,
        ]);
        */
    }

    /**
     * Verify OTP
     */
    public function verifyOtp(User $user, $code, $type = 'verification')
    {
        $otp = Otp::where('user_id', $user->id)
            ->where('type', $type)
            ->where('used', false)
            ->where('otp_code', $code)
            ->where('expires_at', '>', Carbon::now())
            ->first();

        if ($otp) {
            $otp->update(['used' => true]);
            return true;
        }

        return false;
    }
}
