@include('header')

<main id="content" role="main">
    <div class="container pb-8">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mt-10">
            <figure class="max-width-15 mb-4 mx-auto">
                <img src="{{ asset('assets/img/icons8-success-50.gif') }}" alt="Check Mark" style="width: 40px;">
            </figure>
            <div class="mb-5">
                <h1 class="h1">Thank you for your order!</h1>
                <p>Your order number is <strong>{{ $order->order_number }}</strong>. We have received your order and will process it shortly. </p>
            </div>

            @guest
            <div class="card mb-5 border-dashed">
                <div class="card-body">
                    <h4 class="h5">Save time on your next order!</h4>
                    <p class="text-gray-90">Create an account to track your orders, save multiple addresses, and enjoy faster checkout.</p>
                    <a href="{{ route(\App\Constants\RouteNames::REGISTER) }}" class="btn btn-outline-primary-dark transition-3d-hover">Create an Account</a>
                </div>
            </div>
            @endguest

            <a class="btn btn-primary-dark-w px-5" href="{{ route(\App\Constants\RouteNames::HOME) }}">Back to Shopping</a>
        </div>
    </div>
</main>

@include('footer')
</body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/home-v3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2026 11:04:04 GMT -->

</html>