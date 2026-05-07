@include('header')

<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route(\App\Constants\RouteNames::HOME) }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="mb-10 w-md-60 w-lg-50 mx-md-auto">
            <div class="mb-6 text-center">
                <h1 class="h2">Create an Account</h1>
                <p class="text-gray-90">Join Nostalgia Sweets today.</p>
            </div>

            <form class="js-validate" action="{{ route(\App\Constants\RouteNames::REGISTER_POST) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 js-form-message form-group mb-4">
                        <label class="form-label">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First name" required>
                        @error('first_name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6 js-form-message form-group mb-4">
                        <label class="form-label">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last name" required>
                        @error('last_name') <span class="text-danger small">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" required>
                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="e.g. +971501234567" required>
                    @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Address <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="address" rows="3" placeholder="Enter your full address" required>{{ old('address') }}</textarea>
                    @error('address') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input type="password" class="form-control js-password" name="password" placeholder="Create a strong account password" required>
                        <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                            <i class="fas fa-eye text-muted"></i>
                        </span>
                    </div>
                    @error('password') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <div class="position-relative">
                        <input type="password" class="form-control js-password" name="password_confirmation" placeholder="Repeat your password to confirm" required>
                        <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                            <i class="fas fa-eye text-muted"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-6">
                    <button type="submit" class="btn btn-primary-dark-w px-5 transition-3d-hover w-100">Register</button>
                </div>

                <p class="text-center">Already have an account? <a href="{{ route(\App\Constants\RouteNames::LOGIN) }}">Login here</a></p>
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
