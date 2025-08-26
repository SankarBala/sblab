<div class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widgets-company-info d-flex-column justify-content-center ">
                    <div class="dreamhub-logo">
                        <a class="logo_thumb" href="{{ route('home') }}" title="dreamhub">
                            <img src="{{ asset('assets/images/sbl/footer_logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="follow-company-icon mt-4 text-center">
                        <a href="{{ $options->get('facebook') }}" target="_blank"> <i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $options->get('twitter') }}" target="_blank"> <i class="fab fa-twitter"></i></a>
                        <a href="{{ $options->get('youtube') }}" target="_blank"> <i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-2 col-md-6 col-sm-6 pl-40">
                <div class="widget widget-nav-menu">
                    <h4 class="widget-title">Quick Link</h4>
                    <div class="menu-quick-link-content">
                        <ul class="footer-menu">
                            <li><a href="{{ route('about') }}"> About Us </a></li>
                            <li><a href="{{ route('contact') }}"> Contact Us </a></li>
                            <li><a href="{{ route('profiles') }}"> Products </a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <div class="col-lg-5 col-md-6 col-sm-6 pl-40">
                <div class="widget-nav-menu">
                    <h4 class="widget-title">Recent Posts</h4>
                    <div class="menu-quick-link-content">
                        <div class="single-widget-item">

                            @foreach ($articles as $article)
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="{{ route('article', $article) }}">
                                            <img style="width: 100px; height: 100px;"
                                                src="{{ asset('storage/articles/150x150/' . basename($article->image)) }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="recent-post-text">
                                        <h4><a href="{{ route('article', $article) }}">{{ $article->name }}</a></h4>
                                        <span class="rcomment"><i class="far fa-calendar-alt"></i>
                                            {{ $article->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 pl-40 pr-0">
                <div class="widget-nav-menu">
                    <h4 class="widget-title"> Contact Us </h4>
                    <div class="menu-quick-info-content">
                        <ul class="footer-info">
                            <li>
                                <span><i class="fas fa-phone-alt"></i>Phone Number</span><br>
                                <a href="tel:{{ $options->get('phone') }}">{{ $options->get('phone') }}</a>
                            </li>
                            <li>
                                <span><i class="far fa-envelope"></i>Locations</span><br>
                                <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($options->get('address')) }}"
                                    target="_blank">{{ $options->get('address') }}</a>
                            </li>
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i>Email Address</span><br>
                                <a href="mailto:{{ $options->get('email') }}">{{ $options->get('email') }}</a>
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
                        <p>&copy; {{ date('Y') }} All Rights Reserved By |
                            <a class="text-info" href="{{ route('home') }}">
                                S.B.&nbsp;Laboratories Ltd.
                            </a>
                        </p>
                    </div>
                    <div class="">
                        <p>Developed By <a class="text-warning" target="_blank"
                                href="https://sankarbala.github.io">Sankar Bala</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
