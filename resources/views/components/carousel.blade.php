<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="hero-section d-flex align-items-start pt-5">
                <div class="container mt-5">
                    <div class="row hero-bg">
                        <div class="col-xl-6">
                            <div class="hero-content">
                                <h3 class="welcome">Welcome to {{ env('APP_NAME') }}</h3>
                                {{-- <h2>We produce medicine from nature.</h2> --}}
                                <h3 class="tagline">Holistic Health, Inspired by Nature.</h3>
                                <p class="headline text-justify">At {{ env('APP_NAME') }}, we blend ancient Ayurvedic
                                    wisdom with
                                    modern
                                    innovation to
                                    create safe, effective, and natural healthcare solutions. With a commitment to
                                    quality and
                                    well-being, our herbal and nutraceutical products are crafted to enhance your life.
                                    Experience
                                    the power of nature for a healthier tomorrow.</p>
                                <div class="slider-button">
                                    <a class="btn btn-info btn-lg px-5" href="{{ route('products') }}">Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="hero-section d-flex align-items-start pt-5">
                <div class="container mt-5">
                    <div class="row hero-bg">
                        <div class="col-xl-6">
                            <div class="hero-content">
                                <h3 class="welcome">Welcome to {{ env('APP_NAME') }}</h3>
                                <h3 class="tagline">Holistic Health, Inspired by Nature.</h3>
                                <p class="headline text-justify">At {{ env('APP_NAME') }}, we blend ancient Ayurvedic
                                    wisdom with
                                    modern
                                    innovation to
                                    create safe, effective, and natural healthcare solutions. With a commitment to
                                    quality and
                                    well-being, our herbal and nutraceutical products are crafted to enhance your life.
                                    Experience
                                    the power of nature for a healthier tomorrow.</p>
                                <div class="slider-button">
                                    <a class="btn btn-info btn-lg px-5" href="{{ route('products') }}">Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="hero-section d-flex align-items-start pt-5">
                <div class="container mt-5">
                    <div class="row hero-bg">
                        <div class="col-xl-6">
                            <div class="hero-content">
                                <h3 class="welcome">Welcome to {{ env('APP_NAME') }}</h3>
                                <h3 class="tagline">Holistic Health, Inspired by Nature.</h3>
                                <p class="headline text-justify">At {{ env('APP_NAME') }}, we blend ancient Ayurvedic
                                    wisdom with
                                    modern
                                    innovation to
                                    create safe, effective, and natural healthcare solutions. With a commitment to
                                    quality and
                                    well-being, our herbal and nutraceutical products are crafted to enhance your life.
                                    Experience
                                    the power of nature for a healthier tomorrow.</p>
                                <div class="slider-button">
                                    <a class="btn btn-info btn-lg px-5" href="{{ route('products') }}">Products</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev"
        style="border: 0px !important;">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next"
        style="border: 0px !important;">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

@push('styles')
    <style>
        .carousel-control-next {
            border: 0 !important;
        }

        .carousel-inner {
            height: 630px;
        }

        @media (min-width: 768px) {
            .carousel-inner {
                height: 790px;
            }
        }
    </style>
@endpush
