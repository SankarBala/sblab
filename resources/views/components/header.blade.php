<div>
    <div class="header_top_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-sm-10">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                <li><a href="{{ route('home') }}"><i
                                            class="far fa-envelope"></i>{{ $options->get('email') }}</a>
                                </li>
                                <li><a href="{{ route('home') }}">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ $options->get('address') }}</a>
                                </li>
                                <li><a href="{{ route('home') }}"><i
                                            class="fa fa-phone"></i>{{ $options->get('phone') }}</a>
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

    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="dentist_menu">
                <x-nav />
            </nav>
        </div>
    </div>
</div>
