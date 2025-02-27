@extends('layouts.app')

@section('content')
    <div class="hero-section d-flex align-items-start pt-5">
        <div class="container mt-5">
            <div class="row hero-bg">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h3 class="text-warning">Welcome to {{ env('APP_NAME') }}</h3>
                        {{-- <h2>We produce medicine from nature.</h2> --}}
                        <h3 class="mt-4">Holistic Health, Inspired by Nature.</h3>
                        <p class="text-dark  text-justify">At {{ env('APP_NAME') }}, we blend ancient Ayurvedic wisdom with
                            modern
                            innovation to
                            create safe, effective, and natural healthcare solutions. With a commitment to quality and
                            well-being, our herbal and nutraceutical products are crafted to enhance your life. Experience
                            the power of nature for a healthier tomorrow.</p>
                        <div class="slider-button">
                            <a class="btn btn-info btn-lg px-5" href="">Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-thumb">
                        {{-- <img class="" src="assets/images/sbl/herbal.png" alt=""
                            style="width: 300px; margin-top: 20px;" /> --}}
                        {{-- <div class="slider-shape">
                            <div class="shape1"><img src="assets/images/slider/slider-shape1.png" alt=""></div>
                            <div class="shape2"><img src="assets/images/slider/slider-shape2.png" alt=""></div>
                            <div class="shape3"><img src="assets/images/slider/slider-shape3.png" alt=""></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-section">
        <div class="container">
            <div class="row about-bg">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('assets/images/sbl/right-logo-t.png') }}" alt="" style="width: 450px;">
                        {{-- <div class="about-shape">
                            <div class="ab-shape1"><img src="assets/images/resource/about-shape1.png" alt=""></div>
                            <div class="ab-shape2"><img src="assets/images/resource/about-shape2.png" alt=""></div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="dentist-section-title">
                            <h1>Our Division</h1>
                            <p class="text-justify">Innovative Healthcare Divisions Dedicated to Ayurvedic, Herbal,
                                Pharmaceutical, and
                                Veterinary Solutions for Holistic Well-Being and a Healthier Future.</p>
                        </div>
                        <div class="single-about-right">

                            @foreach ($divisions as $division)
                                <div class="single_about_right_inner">
                                    <div class="about-icon">
                                        <img class="img-fluid rounded" style="width: 80px;"
                                            src="{{ asset($division->image) }}" alt="" />
                                    </div>
                                    <div class="single-about-contents">
                                        <h5>{{ $division->name }}</h5>
                                        <p class="text-justify">{!! $division->description ?? '&nbsp;' !!}</p>
                                    </div>
                                </div>
                            @endforeach

                            <div class="btn btn-lg btn-info px-3 py-2 my-4"><a href="about.blade.php">See all products</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="dentist-section-title">
                        <h1>Products</h1>
                        <p class="lead">Some popular products we already have introduced.</p>
                    </div>
                </div>



                @foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12] as $product)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-products-box">
                            <!-- products thumb -->
                            <div class="products-thumbs">
                                <img class="img-thumbnail rounded"
                                    src="{{ asset('assets/images/sbl/divisions/pharmaceuticals.jpg') }}" alt="" />
                                <!-- product thumb -->
                                <div class="product-thumb-icon">
                                    <a href="cart.html"> <i class="bi bi-cart3"></i> </a>
                                    <a href="shop-details.html"> <i class="bi bi-suit-heart"></i> </a>
                                </div>
                            </div>
                            <!-- products content -->
                            <div class="product-content">
                                <!-- product list -->
                                <ul class="product-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-half"></i></li>
                                </ul>
                                <div class="product-title">
                                    <h2> Dental Shower </h2>
                                </div>
                                <!-- product text -->
                                <div class="product-price">
                                    <p> £30.00 <span>£30.00</span> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach







            </div>
        </div>
    </div>

    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dentist-section-title">
                        <h1>Our Team</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-single-box">
                        <div class="team-thumb">
                            <img src="assets/images/resource/team1.png" alt="">
                            <ul class="team-share">
                                <li><a href="home.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="home.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="home.html"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team.html">Stella Smith</a></h3>
                            <div class="team-title"><span>Dental Assistant</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-single-box">
                        <div class="team-thumb">
                            <img src="assets/images/resource/team2.png" alt="">
                            <ul class="team-share">
                                <li><a href="home.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="home.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="home.html"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team.html">Luke Jacobs</a></h3>
                            <div class="team-title"><span>Doctor</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-single-box">
                        <div class="team-thumb">
                            <img src="assets/images/resource/team3.png" alt="">
                            <ul class="team-share">
                                <li><a href="home.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="home.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="home.html"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a href="team.html">Camille Walters</a></h3>
                            <div class="team-title"><span>Dental Assistant</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose_us_left">
                        <div class="choose-us-title">
                            <h5>Why choose us our dental care?</h5>
                            <p>Lorem ipsum dolor sit amet adipiscing elit, eiusmod tempor incididunt ut labore et dolore
                                magna aliqua ipsum .</p>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title">
                                    <h2>Advanced technology for dental care</h2>
                                </div>
                                <div class="description">
                                    <p>Curabitur sagittis libero tincidunt finibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title">
                                    <h2>Available emergency dental services</h2>
                                </div>
                                <div class="description">
                                    <p>Curabitur sagittis libero tincidunt finibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title">
                                    <h2>Our best qualified dentist doctor team</h2>
                                </div>
                                <div class="description">
                                    <p>Curabitur sagittis libero tincidunt finibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title">
                                    <h2>Our best qualified dentist doctor team</h2>
                                </div>
                                <div class="description">
                                    <p>Curabitur sagittis libero tincidunt finibus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-button"><a href="home.html">Dental Services</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose_us_right">
                        <div class="choose-us-title right">
                            <h5>Do you have any question?</h5>
                            <p>Ask your question here. Our agent will reply you soon.</p>
                        </div>
                        <div class="form-area contact-form">
                            <div class="form-inner">
                                <form action="" method="POST" class="form-controls row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" placeholder="Name" type="text"
                                                name="sub" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" value="" type="text"
                                                name="phone" placeholder="Phone Number" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" value="" type="text"
                                                name="email" placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" cols="20" rows="7" placeholder="Write Message" name="textarea-234"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-primary form-group" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dentist-section-title">
                        <h5>&nbsp;</h5>
                        <h1>Checkout Recent News & Blog</h1>
                        <p>Our office combines breakthrough technology with traditional dentistry so that we can improve
                            patient smiles with and non-invasive procedures</p>
                    </div>
                </div>
                <div class="blog_list owl-carousel">
                    @foreach ($articles as $article)
                        <div class="col-lg-12">
                            <div class="blog-single-box">
                                <div class="blog-thumb">
                                    <a href="blog-list.html"><img src="assets/images/resource/blog1.png"
                                            alt=""></a>
                                    <div class="post-categories"><a href="home.html">health</a></div>
                                </div>
                                <div class="dentist-blog-meta-left">
                                    <span><i aria-hidden="true" class="far fa-calendar-alt"></i>February 26, 2023</span>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h2><a href="blog-list.html">Facts About Dental ImplantRecovery Process</a>
                                            </h2>
                                        </div>
                                        <div class="blog-text">
                                            <p>Curabitur sagittis libero tincidunt tem finibus. Mauris at dignissim
                                                ligula, </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dentist-section-title">
                        <h5>Our Clients</h5>
                        <h1>Our Client Happy Say About Us</h1>
                    </div>
                </div>
                <div class="testi_list owl-carousel">
                    <div class="col-lg-12">
                        <div class="testimonial-single-box">
                            <div class="testi-intro">
                                <div class="testi-thumb">
                                    <img src="assets/images/resource/testi1.png" alt="">
                                </div>
                                <div class="testi-title">
                                    <h2> Dr. Linda Davis<span>Health Director</span></h2>
                                </div>
                            </div>
                            <div class="testi-content">
                                <div class="testi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud
                                    exercitation
                                    ullamco laboris nisi ut dolor commodo consequat.
                                </div>
                            </div>
                            <div class="reviews-rating">
                                <div class="testi-star">
                                    <span>5.0</span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div><!-- reviews rating -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-single-box">
                            <div class="testi-intro">
                                <div class="testi-thumb">
                                    <img src="assets/images/resource/testi2.png" alt="">
                                </div>
                                <div class="testi-title">
                                    <h2> Dr. john Martin<span>Specialist</span></h2>
                                </div>
                            </div>
                            <div class="testi-content">
                                <div class="testi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud
                                    exercitation
                                    ullamco laboris nisi ut dolor commodo consequat.
                                </div>
                            </div>
                            <div class="reviews-rating">
                                <div class="testi-star">
                                    <span>4.5</span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                            </div><!-- reviews rating -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-single-box">
                            <div class="testi-intro">
                                <div class="testi-thumb">
                                    <img src="assets/images/resource/testi1.png" alt="">
                                </div>
                                <div class="testi-title">
                                    <h2> Dr. Linda Davis<span>Health Director</span></h2>
                                </div>
                            </div>
                            <div class="testi-content">
                                <div class="testi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud
                                    exercitation
                                    ullamco laboris nisi ut dolor commodo consequat.
                                </div>
                            </div>
                            <div class="reviews-rating">
                                <div class="testi-star">
                                    <span>5.0</span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div><!-- reviews rating -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-single-box">
                            <div class="testi-intro">
                                <div class="testi-thumb">
                                    <img src="assets/images/resource/testi2.png" alt="">
                                </div>
                                <div class="testi-title">
                                    <h2> Dr. john Martin<span>Specialist</span></h2>
                                </div>
                            </div>
                            <div class="testi-content">
                                <div class="testi-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim veniam, quis nostrud
                                    exercitation
                                    ullamco laboris nisi ut dolor commodo consequat.
                                </div>
                            </div>
                            <div class="reviews-rating">
                                <div class="testi-star">
                                    <span>4.5</span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star-half"></span>
                                </div>
                            </div><!-- reviews rating -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe-section">
        <div class="container">
            <div class="row subscribe-bg">
                <div class="col-lg-6">
                    <div class="dentist-section-title">
                        <h3>Subscribe to our newsletter</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="" method="POST" class="form-controls">
                        <div class="subscribe-form">
                            <input type="email" name="email" placeholder="Enter Your Email...." autocomplete="off"
                                required="">
                            <button class="btn btn-sm btn-info" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
