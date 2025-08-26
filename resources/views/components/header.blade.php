<div class="top-block-personal d-block d-lg-none">
    <div class="bg-light position-absolutes w-100 d-flex justify-content-between align-items-center"
        style="z-index: 9999;">
        <div class="py-1 px-2">
            <a class="logo_img" href="{{ route('home') }}" title="dentist">
                <img class="img-fluid" src='{{ asset('assets/images/sbl/logo.png') }}' alt="logo">
            </a>
        </div>
        <div class="px-2">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</div>

<div class="d-none d-md-block">
    <div class="header_top_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-sm-10">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                <li>
                                    <a href="mailto:{{ $options->get('email') }}"><i class="far fa-envelope"></i>
                                        {{ $options->get('email') }}</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($options->get('address')) }}"
                                        target="_blank"><i class="fas fa-map-marker-alt"></i>
                                        {{ $options->get('address') }}</a>
                                </li>
                                <li>
                                    <a href="tel:{{ $options->get('phone') }}"><i class="fa fa-phone"></i>
                                        {{ $options->get('phone') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <div class="header_top_menu_icon">
                        <div class="header_top_menu_icon_inner">
                            <ul>
                                <li><a href="{{ $options->get('facebook') }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="{{ $options->get('twitter') }}" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ $options->get('youtube') }}" target="_blank"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="sticky-header" class="dentist_nav_manu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="logo">
                        <a class="logo_img" href="{{ route('home') }}" title="dentist">
                            <img class="img-fluid" src='{{ asset('assets/images/sbl/logo.png') }}' alt="logo">
                        </a>
                        <a class="main_sticky" href="{{ route('home') }}" title="dentist">
                            <img class="img-fluid" src='{{ asset('assets/images/sbl/logo.png') }}' alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-flex justify-content-end">
                    <nav class="dentist_menu">
                        <x-nav />
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SB Labretories</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about-us">About US</a>
            </li>

            <li class="nav-item dropdown">
                <a id="dropdown-toggle-custom" class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Products
                </a>
                @if (count($divisions) > 0)
                    <ul id="dropdown-menu-custom" class="dropdown-menu">
                        <li>
                            <a class="dropdown-item text-success" href="{{ route('products') }}">Products All
                                Division</a>
                        </li>
                        @foreach ($divisions as $division)
                            <li>
                                <a class="dropdown-item text-primary"
                                    href="{{ route('division', $division) }}">{{ $division->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ route('articles') }}">Articles</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact US</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
        </ul>

    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $("#dropdown-toggle-custom").click(function() {
                $("#dropdown-menu-custom").toggleClass("show");
            });
        });
    </script>
@endpush
