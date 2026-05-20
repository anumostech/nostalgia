@include('header')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a>{{ $product->category->name ?? 'Category' }}</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <!-- Single Product Body -->
        <div class="mb-xl-14 mb-6">
            <div class="row align-items-center">
                <div class="col-md-5 mb-4 mb-md-0 text-center">
                    <div>
                        <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2"
                            data-infinite="true"
                            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
                            data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
                            data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
                            data-nav-for="#sliderSyncingThumb">

                            <div class="js-slide d-flex justify-content-center align-items-center">
                                <img class="img-fluid"
                                    src="{{ asset('storage/products/'.$product->image) }}"
                                    alt="{{ $product->name }}">
                            </div>
                            @for($i = 1; $i <= 4; $i++)
                                @php $field = 'image_' . $i; @endphp
                                <div class="js-slide d-flex justify-content-center align-items-center">
                                    <img class="img-fluid"
                                        src="{{ $product->$field ? asset('storage/products/'.$product->$field) : asset('storage/products/'.$product->image) }}"
                                        alt="{{ $product->name }}">
                                </div>
                            @endfor

                        </div>

                        <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
                            data-infinite="true"
                            data-slides-show="5"
                            data-is-thumbs="true"
                            data-nav-for="#sliderSyncingNav">

                            <div class="js-slide" style="cursor: pointer;">
                                <img class="img-fluid"
                                    src="{{ asset('storage/products/'.$product->image) }}"
                                    alt="{{ $product->name }}">
                            </div>
                            @for($i = 1; $i <= 4; $i++)
                                @php $field = 'image_' . $i; @endphp
                                <div class="js-slide" style="cursor: pointer;">
                                    <img class="img-fluid"
                                        src="{{ $product->$field ? asset('storage/products/'.$product->$field) : asset('storage/products/'.$product->image) }}"
                                        alt="{{ $product->name }}">
                                </div>
                            @endfor

                        </div>
                    </div>
                </div>

                <div class="col-md-7 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">

                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block">
                                {{ $product->category->name ?? 'Category' }}
                            </a>

                            <h2 class="font-size-25 text-lh-1dot2">
                                {{ $product->name }}
                            </h2>

                            <div class="mb-2">
                                <a class="d-inline-flex align-items-center small font-size-15 text-lh-1" href="#Jpills-four-example1-tab">
                                    <div class="text-warning mr-2">
                                        @php $avgRating = $product->reviews->avg('rating') ?: 0; @endphp
                                        @for($i = 1; $i <= 5; $i++)
                                            <small class="{{ $i <= round($avgRating) ? 'fas' : 'far text-muted' }} fa-star"></small>
                                        @endfor
                                    </div>
                                    <span class="text-secondary font-size-13">
                                        ({{ $product->reviews->count() }} customer reviews)
                                    </span>
                                </a>
                            </div>

                            <div class="d-md-flex align-items-center">
                                <div class="ml-md-3 text-gray-9 font-size-14">
                                    Availability:
                                    <span class="text-green font-weight-bold">
                                        {{ $product->stock_quantity ?? 0 }} in stock
                                    </span>
                                </div>
                            </div>

                        </div>

                        <!-- <div class="flex-horizontal-center flex-wrap mb-4">
                            <a href="#" class="text-gray-6 font-size-13 mr-2">
                                <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                            </a>
                        </div> -->

                        <p>{{ $product->description }}</p>

                        <p><strong>SKU</strong>: {{ $product->sku ?? 'N/A' }}</p>

                        <div class="mb-4">
                            <div class="d-flex align-items-baseline">

                                <ins class="font-size-36 text-decoration-none">
                                    <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="30" width="30" />{{ number_format($product->price, 2) }}</div>
                                </ins>

                                @if($product->old_price)
                                <del class="font-size-20 ml-2 text-gray-6">
                                    <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" />{{ number_format($product->old_price, 2) }}</div>
                                </del>
                                @endif

                            </div>
                        </div>

                        <div class="d-xl-block prodcut-add-cart" id="cart-control-{{ $product->id }}">
                            @if(isset($cartItemQuantities[$product->id]))
                            <div class="d-md-flex align-items-center mb-3">
                                <div class="max-width-150 mb-4 mb-md-0 main-product">
                                    <h6 class="font-size-14">Quantity in Cart</h6>
                                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill py-2 px-3">
                                        <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="{{ $cartItemQuantities[$product->id]->id }}" data-action="decrement" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                            <i class="fa {{ $cartItemQuantities[$product->id]->quantity == 1 ? 'fa-trash' : 'fa-minus' }} font-size-12"></i>
                                        </button>
                                        <span class="mx-2 font-weight-bold text-white qty-display-{{ $cartItemQuantities[$product->id]->id }}">{{ $cartItemQuantities[$product->id]->quantity }}</span>
                                        <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="{{ $cartItemQuantities[$product->id]->id }}" data-action="increment" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                            <i class="fa fa-plus font-size-12"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="ml-md-3">
                                    <span class="text-success font-weight-bold"><i class="fas fa-check-circle mr-1"></i> Already in Cart</span>
                                </div>
                            </div>
                            @else
                            <form class="add-to-cart-form" action="{{ route(\App\Constants\RouteNames::CART_ADD) }}" method="POST" data-product-id="{{ $product->id }}">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="d-md-flex align-items-end mb-3">
                                    <div class="max-width-150 mb-4 mb-md-0 main-product">
                                        <h6 class="font-size-12">Quantity</h6>
                                        <div class="border rounded-pill py-2 px-3 border-color-1">
                                            <div class="js-quantity row align-items-center">
                                                <div class="col-auto">
                                                    <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <input name="quantity"
                                                        class="js-result form-control h-auto border-0 rounded p-0 shadow-none"
                                                        type="text"
                                                        value="1">
                                                </div>
                                                <div class="col-auto">
                                                    <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ml-md-3">
                                        <button type="submit" class="btn px-5 btn-primary-dark transition-3d-hover">
                                            <i class="ec ec-add-to-cart mr-2 font-size-20"></i>
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- End Single Product Body -->
        <!-- Single Product Tab -->
        <div class="mb-8">
            <div class="position-relative position-md-static px-md-6">
                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link active" id="Jpills-four-example1-tab" data-toggle="pill" href="#Jpills-four-example1" role="tab" aria-controls="Jpills-four-example1" aria-selected="false">Reviews</a>
                    </li>
                </ul>
            </div>
            <!-- Tab Content -->
            <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
                <div class="tab-content" id="Jpills-tabContent">
                    <div class="tab-pane fade active show" id="Jpills-four-example1" role="tabpanel" aria-labelledby="Jpills-four-example1-tab">
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h3 class="font-size-18 mb-6">Based on {{ $product->reviews->count() }} reviews</h3>
                                    <h2 class="font-size-30 font-weight-bold text-lh-1 mb-0">{{ number_format($product->reviews->avg('rating'), 1) }}</h2>
                                    <div class="text-lh-1">overall</div>
                                </div>

                                <!-- Ratings -->
                                <ul class="list-unstyled">
                                    @for($i = 5; $i >= 1; $i--)
                                    @php
                                        $count = $product->reviews->where('rating', $i)->count();
                                        $percent = $product->reviews->count() > 0 ? ($count / $product->reviews->count()) * 100 : 0;
                                    @endphp
                                    <li class="py-1">
                                        <a class="row align-items-center mx-gutters-2 font-size-1" href="javascript:;">
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                                    @for($j = 1; $j <= 5; $j++)
                                                        <small class="{{ $j <= $i ? 'fas' : 'far text-muted' }} fa-star"></small>
                                                    @endfor
                                                </div>
                                            </div>
                                            <div class="col-auto mb-2 mb-md-0">
                                                <div class="progress ml-xl-5" style="height: 10px; width: 200px;">
                                                    <div class="progress-bar" role="progressbar" style="width: {{ $percent }}%;" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto text-right">
                                                <span class="text-gray-90">{{ $count }}</span>
                                            </div>
                                        </a>
                                    </li>
                                    @endfor
                                </ul>
                                <!-- End Ratings -->
                            </div>
                            <div class="col-md-6">
                                <h3 class="font-size-18 mb-5">Add a review</h3>
                                <!-- Form -->
                                <form class="js-validate" action="{{ route(\App\Constants\RouteNames::PRODUCT_REVIEW_STORE) }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="rating" id="ratingValue" value="5">
                                    <div class="row align-items-center mb-4">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="rating" class="form-label mb-0">Your Review</label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="text-warning text-ls-n2 font-size-16 star-rating" style="cursor: pointer;">
                                                <small class="fas fa-star" data-value="1"></small>
                                                <small class="fas fa-star" data-value="2"></small>
                                                <small class="fas fa-star" data-value="3"></small>
                                                <small class="fas fa-star" data-value="4"></small>
                                                <small class="fas fa-star" data-value="5"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="descriptionTextarea" class="form-label">Your Review</label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea class="form-control" rows="3" id="descriptionTextarea" name="comment" required
                                                data-msg="Please enter your message."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success"></textarea>
                                        </div>
                                    </div>
                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="inputName" class="form-label">Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="text" class="form-control" name="name" id="inputName" value="{{ Auth::user()->name ?? '' }}" required
                                                data-msg="Please enter your name."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <div class="js-form-message form-group mb-3 row">
                                        <div class="col-md-4 col-lg-3">
                                            <label for="emailAddress" class="form-label">Email <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <input type="email" class="form-control" name="email" id="emailAddress" value="{{ Auth::user()->email ?? '' }}" required
                                                data-msg="Please enter a valid email address."
                                                data-error-class="u-has-error"
                                                data-success-class="u-has-success">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-md-4 offset-lg-3 col-auto">
                                            <button type="submit" class="btn btn-primary-dark btn-wide transition-3d-hover">Add Review</button>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const stars = document.querySelectorAll('.star-rating .fa-star');
                                        const ratingInput = document.getElementById('ratingValue');

                                        stars.forEach(star => {
                                            star.addEventListener('click', function() {
                                                const value = this.getAttribute('data-value');
                                                ratingInput.value = value;
                                                
                                                stars.forEach(s => {
                                                    if (s.getAttribute('data-value') <= value) {
                                                        s.classList.remove('far', 'text-muted');
                                                        s.classList.add('fas');
                                                    } else {
                                                        s.classList.remove('fas');
                                                        s.classList.add('far', 'text-muted');
                                                    }
                                                });
                                            });
                                        });
                                    });
                                </script>
                                <!-- End Form -->
                            </div>
                        </div>
                        <!-- Review -->
                        @forelse($product->reviews as $review)
                        <div class="border-bottom border-color-1 pb-4 mb-4">
                            <!-- Review Rating -->
                            <div class="d-flex justify-content-between align-items-center text-secondary font-size-1 mb-2">
                                <div class="text-warning text-ls-n2 font-size-16" style="width: 80px;">
                                    @for($i = 1; $i <= 5; $i++)
                                        <small class="{{ $i <= $review->rating ? 'fas' : 'far text-muted' }} fa-star"></small>
                                    @endfor
                                </div>
                            </div>
                            <!-- End Review Rating -->

                            <p class="text-gray-90">{{ $review->comment }}</p>

                            <!-- Reviewer -->
                            <div class="mb-2">
                                <strong>{{ $review->name }}</strong>
                                <span class="font-size-13 text-gray-23">- {{ $review->created_at->format('F d, Y') }}</span>
                            </div>
                            <!-- End Reviewer -->
                        </div>
                        @empty
                        <div class="pb-4">
                            <p class="text-gray-90">No reviews yet. Be the first to review this product!</p>
                        </div>
                        @endforelse
                        <!-- End Review -->
                    </div>
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Single Product Tab -->
        <!-- Related products -->
        <div class="mb-6">
            <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
            </div>
            <ul class="row list-unstyled products-group no-gutters">
                @foreach($related as $item)
                <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                    <div class="product-item__outer h-100">
                        <div class="product-item__inner px-xl-4 p-3">
                            <div class="product-item__body pb-xl-2">

                                <div class="mb-2">
                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, $item->id) }}"
                                        class="font-size-12 text-gray-5">
                                        {{ $item->category->name }}
                                    </a>
                                </div>

                                <h5 class="mb-1 product-item__title">
                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, $item->id) }}" "
                                        class=" text-blue font-weight-bold">
                                        {{ $item->name }}
                                    </a>
                                </h5>

                                <div class="mb-2">
                                    <a href="{{ route(\App\Constants\RouteNames::PRODUCT_SHOW, $item->id) }}" "
                                        class=" d-block text-center">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/products/'.$item->image) }}"
                                            alt="{{ $item->name }}">
                                    </a>
                                </div>

                                <div class="flex-center-between mb-1">
                                    <div class="prodcut-price">
                                        <div class="text-gray-100">
                                            <div class="d-flex align-items-center"><img src="{{  asset('assets/img/dihram.webp') }}" height="20" width="20" /> {{ number_format($item->price, 2) }}</div>
                                        </div>
                                    </div>

                                    <div class="d-xl-block prodcut-add-cart" id="cart-control-{{ $item->id }}">
                                        @if(isset($cartItemQuantities[$item->id]))
                                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-pill">
                                            <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="{{ $cartItemQuantities[$item->id]->id }}" data-action="decrement" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                                <i class="fa {{ $cartItemQuantities[$item->id]->quantity == 1 ? 'fa-trash' : 'fa-minus' }} font-size-10"></i>
                                            </button>
                                            <span class="mx-2 font-weight-bold text-white qty-display-{{ $cartItemQuantities[$item->id]->id }}">{{ $cartItemQuantities[$item->id]->quantity }}</span>
                                            <button type="button" class="btn btn btn-primary update-cart-qty" data-cart-item-id="{{ $cartItemQuantities[$item->id]->id }}" data-action="increment" style="padding:0.5rem 0.5rem;font-size:0.5rem;">
                                                <i class="fa fa-plus font-size-10"></i>
                                            </button>
                                        </div>
                                        @else
                                        <form class="add-to-cart-form" action="{{ route(\App\Constants\RouteNames::CART_ADD) }}" method="POST" data-product-id="{{ $item->id }}">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <button type="submit" class="btn-add-cart btn-primary transition-3d-hover">
                                                <i class="ec ec-add-to-cart"></i>
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <!-- <div class="product-item__footer">
                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                    <a href="#" class="text-gray-6 font-size-13">
                                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                                    </a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
        <!-- End Related products -->

    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
@include('footer')
</body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/home-v3.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Feb 2026 11:04:04 GMT -->

</html>