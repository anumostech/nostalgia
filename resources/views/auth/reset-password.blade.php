@include('header')

<main id="content" role="main">
    <div class="container">
        <div class="mb-10 w-md-60 w-lg-50 mx-md-auto py-10">
            <div class="mb-6 text-center">
                <h1 class="h2">Reset Password</h1>
                <p class="text-gray-90">Enter your new password below.</p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form class="js-validate" action="{{ route(\App\Constants\RouteNames::RESET_PASSWORD_POST) }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user_id }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">New Password <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input type="password" class="form-control js-password" name="password" placeholder="Enter your new secret password" required autofocus>
                        <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                            <i class="fas fa-eye text-muted"></i>
                        </span>
                    </div>
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input type="password" class="form-control js-password" name="password_confirmation" placeholder="Repeat new password to verify" required>
                        <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                            <i class="fas fa-eye text-muted"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-6">
                    <button type="submit" class="btn btn-primary-dark-w px-5 transition-3d-hover w-100">Reset Password</button>
                </div>
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
