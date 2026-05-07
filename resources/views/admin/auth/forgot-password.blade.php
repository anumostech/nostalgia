<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nostalgia Sweets Admin | Forgot Password</title>
    @include('admin.header')
</head>

<body>
    <main class="auth-minimal-wrapper">
        <div class="auth-minimal-inner">
            <div class="minimal-card-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h5 class="fw-bold">Forgot Password?</h5>
                                    <p class="fs-12 text-muted">Enter your email address and we'll send you a verification code to reset your password.</p>
                                </div>
                                <form method="POST" action="{{ route(\App\Constants\RouteNames::FORGOT_PASSWORD_POST) }}" class="w-100">
                                    @csrf
                                    <div class="mb-4">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                        @error('email')
                                            <span class="text-danger fs-12">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary w-100">Send Reset Code</button>
                                </form>
                                <div class="mt-5 text-muted">
                                    <span>Back to</span>
                                    <a href="{{ route(\App\Constants\RouteNames::LOGIN) }}" class="fw-bold">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('admin.footer')
</body>

</html>
