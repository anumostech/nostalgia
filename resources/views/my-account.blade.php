@include('header')

<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                href="{{ route(\App\Constants\RouteNames::HOME) }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">My Account
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container mb-10">
        @auth
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body text-center">
                            <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : asset('assets/img/default-avatar.jpg') }}"
                                alt="Avatar" class="rounded-circle mb-3" width="100">
                            <h4 class="mb-0">{{ auth()->user()->name }}</h4>
                            <p class="text-muted small mb-3">Customer since {{ auth()->user()->created_at->format('M Y') }}
                            </p>
                            <a href="{{ route(\App\Constants\RouteNames::LOGOUT) }}"
                                class="btn btn-outline-danger btn-sm">Logout</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Profile Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-4">Full Name</div>
                                <div class="col-sm-8 font-weight-bold">{{ auth()->user()->name }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">Email</div>
                                <div class="col-sm-8 font-weight-bold">{{ auth()->user()->email }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">Phone Number</div>
                                <div class="col-sm-8 font-weight-bold">{{ auth()->user()->phone }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">Verification Status</div>
                                <div class="col-sm-8">
                                    @if(auth()->user()->is_verified)
                                        <span class="badge badge-success px-3 py-2">Verified</span>
                                    @else
                                        <span class="badge badge-warning px-3 py-2">Not Verified</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm px-3 py-2">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">My Orders</h5>
                            <span class="badge badge-soft-secondary">{{ $orders->count() }} Orders</span>
                        </div>
                        <div class="card-body p-0">
                            @if($orders->count() > 0)
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="border-top-0">Order ID</th>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">Total</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td class="font-weight-bold">{{ $order->order_number }}</td>
                                                    <td class="">{{ $order->created_at->format('d M, Y') }}</td>
                                                    <td class="font-weight-bold">AED {{ number_format($order->total_amount, 2) }}</td>
                                                    <td>
                                                        <span class="px-3 py-2 text-white badge badge-{{ $order->order_status == 'delivered' ? 'success' : ($order->order_status == 'cancelled' ? 'danger' : 'warning') }}">
                                                            {{ strtoupper($order->order_status) }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route(\App\Constants\RouteNames::TRACK_YOUR_ORDER, ['order_id' => $order->order_number, 'email' => auth()->user()->email]) }}" 
                                                           class="btn btn-soft-secondary btn-xs">Track</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="text-center py-5">
                                    <i class="fas fa-shopping-basket fa-3x text-muted mb-3"></i>
                                    <p class="text-muted">You haven't placed any orders yet.</p>
                                    <a href="{{ route(\App\Constants\RouteNames::HOME) }}" class="btn btn-primary btn-sm">Start Shopping</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="mb-5 text-center">
                <h1>My Account</h1>
            </div>
            <div class="row">
                <div class="col-md-5 ml-xl-auto">
                    <div class="border-bottom border-color-1 mb-6">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Login</h3>
                    </div>
                    <p class="text-gray-90 mb-4">Welcome back! Sign in to your account.</p>

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <form class="js-validate" action="{{ route(\App\Constants\RouteNames::AUTH_LOGIN_POST) }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="form-label">Username Or Email Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="login" placeholder="Username or Email address" required>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                                <input type="password" class="form-control js-password" name="password" placeholder="Enter your secret password" required>
                                <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                                    <i class="fas fa-eye text-muted"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="rememberMe" name="remember">
                                <label class="custom-control-label" for="rememberMe">Remember Me</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary-dark-w px-5 w-100">Login</button>
                        </div>
                        <div class="mb-2">
                            <a class="text-blue small" href="{{ route(\App\Constants\RouteNames::FORGOT_PASSWORD) }}">Lost your password?</a>
                        </div>
                        <div class="text-center my-3">
                            <span class="text-muted">OR</span>
                        </div>
                        <div>
                            <a href="{{ route(\App\Constants\RouteNames::OTP_LOGIN) }}" class="btn btn-outline-primary-dark px-5 w-100">Login with OTP</a>
                        </div>
                    </form>
                </div>

                <div class="col-md-1 d-none d-md-flex align-items-center justify-content-center">
                    <div class="bg-gray-13 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; font-style: italic;">or</div>
                </div>

                <div class="col-md-5 mr-xl-auto">
                    <div class="border-bottom border-color-1 mb-6">
                        <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Register</h3>
                    </div>
                    <p class="text-gray-90 mb-4">Create new account today to reap the benefits of a personalized shopping experience.</p>
                    
                    <form class="js-validate" action="{{ route(\App\Constants\RouteNames::REGISTER_POST) }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <label class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" placeholder="Email address" required>
                        </div>

                        <div class="form-group mb-4">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <div class="position-relative">
                                <input type="password" class="form-control js-password" name="password" placeholder="Create a strong account password" required>
                                <span class="js-toggle-password position-absolute" style="right: 15px; top: 12px; cursor: pointer;">
                                    <i class="fas fa-eye text-muted"></i>
                                </span>
                            </div>
                        </div>

                        <p class="text-gray-90 small mb-4">Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="{{ route(\App\Constants\RouteNames::PRIVACY) }}" class="text-blue">privacy policy.</a></p>

                        <div class="mb-6">
                            <button type="submit" class="btn btn-primary-dark-w px-5 w-100">Register</button>
                        </div>
                    </form>

                    <h5 class="font-size-14 font-weight-bold mb-3">Sign up today and you will be able to :</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="fas fa-check text-primary mr-2"></i> Speed your way through checkout</li>
                        <li class="mb-2"><i class="fas fa-check text-primary mr-2"></i> Track your orders easily</li>
                        <li class="mb-2"><i class="fas fa-check text-primary mr-2"></i> Keep a record of all your purchases</li>
                    </ul>
                </div>
            </div>
        @endauth
    </div>
</main>

@include('footer')

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Password toggle logic
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