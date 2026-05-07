@include('header')

<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route(\App\Constants\RouteNames::HOME) }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-10 w-md-60 w-lg-50 mx-md-auto">
            <div class="mb-6 text-center">
                <h1 class="h2">Welcome Back</h1>
                <p class="text-gray-90">Login to your account.</p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session('warning'))
                <div class="alert alert-warning">{{ session('warning') }}</div>
            @endif

            <form class="js-validate" action="{{ route(\App\Constants\RouteNames::AUTH_LOGIN_POST) }}" method="POST">
                @csrf
                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Email or Mobile Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="login" value="{{ old('login') }}" placeholder="Enter your email or phone" required>
                    @error('login') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="js-form-message form-group mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <label class="form-label">Password <span class="text-danger">*</span></label>
                        <a class="text-muted small" href="{{ route(\App\Constants\RouteNames::FORGOT_PASSWORD) }}">Forgot password?</a>
                    </div>
                    <div class="position-relative">
                        <input type="password" class="form-control js-password" name="password" placeholder="Enter your account password" required>
                        <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                            <i class="fas fa-eye text-muted"></i>
                        </span>
                    </div>
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="btn btn-primary-dark-w px-5 transition-3d-hover w-100">Login</button>
                </div>

                <div class="text-center mb-4">
                    <span class="text-muted">OR</span>
                </div>

                <div class="mb-6">
                    <a href="{{ route(\App\Constants\RouteNames::OTP_LOGIN) }}" class="btn btn-outline-primary-dark px-5 transition-3d-hover w-100">Login with OTP</a>
                </div>

                <p class="text-center">Don't have an account? <a href="{{ route(\App\Constants\RouteNames::REGISTER) }}">Register here</a></p>
            </form>
        </div>
    </div>
</main>

@include('footer')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.js-toggle-password');
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.js-password');
            const icon = this.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
});
</script>
</body>
</html>
