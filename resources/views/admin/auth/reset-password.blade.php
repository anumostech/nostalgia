<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Reset Password</title>
    @include('admin.header')
</head>

<body>
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="mb-4">
                        <h5 class="fw-bold">Reset Password</h5>
                        <p class="fs-12 text-muted">Enter the verification code sent to your email and your new password.</p>
                    </div>
                    <form method="POST" action="{{ route(\App\Constants\RouteNames::RESET_PASSWORD_POST) }}" class="w-100">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Verification Code</label>
                            <input type="text" class="form-control" name="code" placeholder="6-digit code" required>
                            @error('code')
                                <span class="text-danger fs-12">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" name="password" placeholder="New Password" required>
                            @error('password')
                                <span class="text-danger fs-12">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary w-100">Reset Password</button>
                    </form>
                    <div class="mt-5 text-muted">
                        <span>Back to</span>
                        <a href="{{ route(\App\Constants\RouteNames::LOGIN) }}" class="fw-bold">Login</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </main>
    @include('admin.footer')
</body>

</html>
