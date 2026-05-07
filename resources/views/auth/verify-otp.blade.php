@include('header')

<main id="content" role="main">
    <div class="container">
        <div class="mb-10 w-md-60 w-lg-40 mx-md-auto py-10">
            <div class="mb-6 text-center">
                <h1 class="h2">OTP Verification</h1>
                <p class="text-gray-90">We've sent a 6-digit code to your contact details.</p>
                <div class="alert alert-info py-2">
                    User: <strong>{{ $user->email }}</strong> / <strong>{{ $user->phone }}</strong>
                </div>
            </div>

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form class="js-validate" action="{{ route(\App\Constants\RouteNames::OTP_VERIFY_POST) }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="type" value="{{ $type }}">

                <div class="js-form-message form-group mb-4">
                    <label class="form-label text-center d-block">Enter 6-Digit Code</label>
                    <input type="text" class="form-control text-center font-size-24 letter-spacing-5" name="otp" placeholder="000000" maxlength="6" pattern="\d{6}" required autofocus>
                    @error('otp') <span class="text-danger small">{{ $message }}</span> @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="btn btn-primary-dark-w px-5 transition-3d-hover w-100">Verify OTP</button>
                </div>
            </form>

            <div class="text-center">
                <p class="mb-1">Didn't receive the code?</p>
                <form action="{{ route(\App\Constants\RouteNames::OTP_RESEND) }}" method="POST" id="resend-form">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="type" value="{{ $type }}">
                    <button type="submit" class="btn btn-link text-primary p-0" id="resend-btn">Resend OTP</button>
                    <span id="timer-text" class="text-muted small d-none">Resend in <span id="timer">60</span>s</span>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const resendBtn = document.getElementById('resend-btn');
        const timerText = document.getElementById('timer-text');
        const timerDisplay = document.getElementById('timer');
        let timeLeft = 60;

        function startTimer() {
            resendBtn.classList.add('d-none');
            timerText.classList.remove('d-none');
            const interval = setInterval(() => {
                timeLeft--;
                timerDisplay.textContent = timeLeft;
                if (timeLeft <= 0) {
                    clearInterval(interval);
                    resendBtn.classList.remove('d-none');
                    timerText.classList.add('d-none');
                    timeLeft = 60;
                }
            }, 1000);
        }

        resendBtn.addEventListener('click', function() {
            // Form submits, but we can also start timer immediately for UI feel
            // In a real app, you might check if resend was successful via AJAX
        });

        // Auto-start timer on load if needed
        // startTimer();
    });
</script>

@include('footer')
</body>
</html>
