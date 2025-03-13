<div class="col-lg-3 col-md-6">
    <div class="single-products-box">
        <!-- products thumb -->
        <div class="products-thumb">
            <a href="{{ route('product', $product) }}">
                <img src="{{ asset('storage/products/300x300/' . basename($product->image)) }}" alt="" />
            </a>
            <!-- product sale -->
            <div class="product-sale">
                <span> BDT {{ number_format($product->price, 2) }} Tk. </span>
            </div>
            <!-- product thumb -->
            {{-- <div class="product-thumb-icon">
                <a href="cart.html"> <i class="bi bi-cart3"></i> </a>
                <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>
            </div> --}}
        </div>
        <!-- products content -->
        <div class="product-content text-start">
            <!-- product list -->
            {{-- <ul class="product-rating">
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-half"></i></li>
            </ul> --}}
            <div class="product-title">
                <a href="{{ route('product', $product) }}">
                    <h6 class=""> {{ $product->name }} </h6>
                </a>
            </div>
            <!-- product text -->
            <div class="product-price">
                <a href="{{ route('division', $product->division) }}">
                    <p class="fw-bold">{{ $product->division->name }}</p>
                </a>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .img-square {
            width: 100%;
            /* aspect-ratio: 1/1;
                    object-fit: cover; */
        }
    </style>
@endpush
