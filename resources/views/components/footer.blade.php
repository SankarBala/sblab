<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widgets-company-info">
                    <div class="dreamhub-logo">
                        <a class="logo_thumb" href="{{route('home')}}" title="dreamhub">
                            <img src="{{asset('assets/images/sbl/footer_logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="follow-company-icon mt-4 text-center">
                        <a href="home.html"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="home.html"> <i class="fab fa-pinterest"></i> </a>
                        <a href="home.html"> <i class="fab fa-instagram"> </i> </a>
                        <a href="home.html"> <i class="fab fa-google"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 pl-40">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title">Quick Link</h4>
                    <div class="menu-quick-link-content">
                        <ul class="footer-menu">
                            <li><a href="{{route('about')}}"> About Us </a></li>
                            <li><a href="{{route('contact')}}"> Contact Us </a></li>
                            <li><a href="{{route('profiles')}}"> Products </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 pl-40">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="menu-quick-link-content">
                        <div class="single-widget-item">
                            <div class="recent-post-item">
                                <div class="recent-post-image">
                                    <a href="{{route('articles')}}"><img src="assets/images/resource/recent1.png" alt=""></a>
                                </div>
                                <div class="recent-post-text">
                                    <h4><a href="home.html">Get The Exercise Limited Mobility</a></h4>
                                    <span class="rcomment"><i class="far fa-calendar-alt"></i> Sep 03, 2023</span>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <div class="recent-post-image">
                                    <a href="home.html"><img src="assets/images/resource/recent2.png" alt=""></a>
                                </div>
                                <div class="recent-post-text">
                                    <h4><a href="home.html"> How Long Does It Take To Whiten </a></h4>
                                    <span class="rcomment"><i class="far fa-calendar-alt"></i> Sep 03, 2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 pl-40 pr-0">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title"> Contact Us </h4>
                    <div class="menu-quick-info-content">
                        <ul class="footer-info">
                            <li>
                                <span><i class="fas fa-phone-alt"></i>Phone Number</span><br>
                                <a href="home.html">{{$options->get('phone')}}</a>
                            </li>
                            <li>
                                <span><i class="far fa-envelope"></i>Locations</span><br>
                                <a href="home.html">{{$options->get('address')}}</a>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i>Email Address</span><br>
                                <a href="home.html">{{$options->get('email')}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bg">
            <div class="col-lg-12 col-md-12">
                <div class="footer-bottom-content d-flex justify-content-between">
                    <div class="">
                        <p>&copy; {{date('Y')}} All Rights Reserved By |
                            <a class="text-info" href="{{route('home')}}">
                                S.B. Laboratories Ltd.
                            </a>
                        </p>
                    </div>
                    <div class="">
                        <p>Developed By <a class="text-warning" href="{{route('home')}}">Sankar Bala</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
