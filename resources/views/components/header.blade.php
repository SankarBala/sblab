<div>
    <div class="header_top_menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                <li><a href="{{route('home')}}"><i class="far fa-envelope"></i>sblab@gmail.com</a>
                                </li>
                                <li><a href="{{route('home')}}"><i class="fas fa-map-marker-alt"></i>Rupayan FPAB Tower,
                                        02 Paltan,
                                        Dhaka-1000</a>
                                </li>
                                <li><a href="{{route('home')}}"><i class="fa fa-phone"></i>+ (013) 456 7890</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="header_top_menu_icon">
                        <div class="header_top_menu_icon_inner">
                            <ul>
                                <li><a href="{{route('home')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{route('home')}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{route('home')}}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{route('home')}}"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="{{route('home')}}"><i class="fab fa-linkedin-in"></i></a></li>
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
                <div class="col-lg-2">
                    <div class="logo">
                        <a class="logo_img" href="{{route('home')}}" title="dentist">
                            <img src='{{asset("assets/images/logo.png")}}' alt="logo">
                        </a>
                        <a class="main_sticky" href="{{route('home')}}" title="dentist">
                            <img src='{{asset("assets/images/logo2.png")}}' alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <nav class="dentist_menu">
                        <x-nav/>
                        <!-- header button -->
                        <div class="header-right">
                            <div class="header-button">
                                <a href="{{route('home')}}">Send a Request</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="dentist_menu">
                <x-nav/>
            </nav>
        </div>
    </div>
</div>
