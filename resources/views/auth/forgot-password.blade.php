@include('header')

<main id="content" role="main">
    <div class="container">
        <div class="mb-10 w-md-60 w-lg-50 mx-md-auto py-10">
            <div class="mb-6 text-center">
                <h1 class="h2">Forgot Password</h1>
                <p class="text-gray-90">Enter your email or mobile to receive a reset code.</p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form class="js-validate" action="{{ route(\App\Constants\RouteNames::FORGOT_PASSWORD_POST) }}" method="POST">
                @csrf
                <div class="js-form-message form-group mb-4">
                    <label class="form-label">Email or Mobile Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="login" value="{{ old('login') }}" placeholder="Enter your email or phone" required autofocus>
                    @error('login') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="btn btn-primary-dark-w px-5 transition-3d-hover w-100">Send Reset Code</button>
                </div>

                <p class="text-center">Remembered your password? <a href="{{ route(\App\Constants\RouteNames::LOGIN) }}">Login here</a></p>
            </form>
        </div>
    </div>
</main>

@include('footer')
</body>
</html>
