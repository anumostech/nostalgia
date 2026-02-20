@foreach($products as $product)

<li class="col-6 col-md-3 col-wd-2gdot4 product-item
                        @if($loop->iteration % 5 == 4) remove-divider-md-lg remove-divider-xl @endif
                        @if($loop->iteration % 5 == 0) remove-divider-wd @endif">

    <div class="product-item__outer h-100">
        <div class="product-item__inner px-xl-4 p-3">
            <div class="product-item__body pb-xl-2">

                <div class="mb-2">
                    <a href="{{ url('product/'.$product->id) }}" class="d-block text-center">
                        <img class="img-fluid"
                            src="{{ asset('storage/products/'.$product->image) }}"
                            alt="{{ $product->name }}">
                    </a>
                </div>


                <div class="mb-2">
                    <a href="{{ url('products?category='.$product->category_id) }}" class="font-size-12 text-gray-5">
                        {{ $product->category->name ?? 'Category' }}
                    </a>
                </div>

                <h5 class="mb-1 product-item__title">
                    <a href="{{ url('product/'.$product->id) }}" class="text-blue font-weight-bold">
                        {{ $product->name }}
                    </a>
                </h5>


                <div class="flex-center-between mb-1">
                    <div class="prodcut-price">
                        <div class="text-gray-100">
                            {{ number_format($product->price, 2) }} AED
                        </div>
                    </div>

                    <div class="d-none d-xl-block prodcut-add-cart">
                        <a href="{{ url('product/'.$product->id) }}" class="btn-add-cart btn-primary transition-3d-hover">
                            <i class="ec ec-add-to-cart"></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="product-item__footer">
                <div class="border-top pt-2 flex-center-between flex-wrap">
                    <a href="{{ url('wishlist') }}" class="text-gray-6 font-size-13">
                        <i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist
                    </a>
                </div>
            </div>

        </div>
    </div>

</li>

@endforeach