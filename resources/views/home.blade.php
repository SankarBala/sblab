@extends('layouts.app')

@section('content')
    <x-carousel />
    {{-- <div class="hero-section d-flex align-items-start pt-5">
        <div class="container mt-5">
            <div class="row hero-bg">
                <div class="col-xl-6">
                    <div class="hero-content">
                        <h3 class="welcome">Welcome to {{ env('APP_NAME') }}</h3> 
                        <h3 class="tagline">Holistic Health, Inspired by Nature.</h3>
                        <p class="headline text-justify">At {{ env('APP_NAME') }}, we blend ancient Ayurvedic wisdom with
                            modern
                            innovation to
                            create safe, effective, and natural healthcare solutions. With a commitment to quality and
                            well-being, our herbal and nutraceutical products are crafted to enhance your life. Experience
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
    </div> --}}

    <div class="about-section">
        <div class="container-fluid">
            <div class="row about-bgs">
                <div class="col-lg-6">
                    <div class="about-thumbss">
                        <img class="img-thumbnail" src="{{ asset('assets/images/sbl/factory_small.jpeg') }}" alt=""
                            style="width:100%;" />
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
                            <p class="text-justify border-bottom mb-4">Innovative Healthcare Divisions Dedicated to
                                Ayurvedic, Herbal,
                                Pharmaceutical, and Veterinary Solutions for Holistic Well-Being and a Healthier Future.</p>
                        </div>
                        <div class="single-about-right">

                            @foreach ($divisions as $division)
                                <div class="single_about_right_inner">
                                    <div class="about-icon">
                                        <img class="img-fluid rounded" style="width: 80px;"
                                            src="{{ asset("storage/$division->image") }}" alt="" />
                                    </div>
                                    <div class="single-about-contents">
                                        <h5>{{ $division->name }}</h5>
                                        <p class="text-justify">{!! $division->description ?? '&nbsp;' !!}</p>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="btn btn-lg btn-info px-3 py-2 my-4"><a href="about.blade.php">See all products</a>
                            </div> --}}
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
                @foreach ($products as $product)
                    @include('components.product', ['product' => $product])
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
                        <p></p>
                    </div>
                </div>
                @foreach ($staffs as $staff)
                    @include('components.staff', ['staff' => $staff])
                @endforeach
            </div>
        </div>
    </div>



    <div class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dentist-section-title">
                        <h5>&nbsp;</h5>
                        <h1>Read our recent Blogs</h1>
                        <p>Stay updated with the latest insights, tips, and trends in our recent blogs. Explore expert
                            opinions, helpful guides, and inspiring stories curated just for you! </p>
                    </div>
                </div>
                <div class="blog_list owl-carousel">
                    @foreach ($articles as $article)
                        <div class="col-lg-12">
                            @include('components.article', ['article' => $article])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-sectionl mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dentist-section-title">
                        <h1>Do you have any question?</h1>
                        <p>Ask your question here. Our agent will reply you soon.</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4343.456803074698!2d90.41233592574451!3d23.7332092526258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1740685907697!5m2!1sen!2sbd"
                        width="100%" height="540px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class="col-lg-5">
                    <div class="contact-form-wrapper">
                        <div class="form-area home-contact-form">
                            <div class="form-inner">
                                <form id="message-form" class="form-controls rows" action="{{ route('store_message') }}">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" placeholder="Name" type="text"
                                                name="name" required>
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
                                            <input class="form-control" size="40" value="" type="email"
                                                name="email" placeholder="Email Address" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <textarea class="form-control mb-2" cols="20" rows="5" placeholder="Write Message" name="message" required></textarea>
                                            <span id="message-response" class="text-info">&nbsp;</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button class="msg-button" type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="testimonial-section">
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
                                    <img src="" alt="/">
                                </div>
                                <div class="testi-title">
                                    <h2> Dr. Linda Davis<span>Health Director</span></h2>
                                </div>
                            </div>
                            <div class="testi-content">
                                <div class="testi-text">Lorem ipsum dolor
                                </div>
                            </div>
                            <div class="reviews-rating">
                                <div class="testi-star">
                                    <span>5.0</span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="subscribe-section">
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
    </div> --}}
@endsection

@push('styles')
    <style>
        .hero-section .welcome {
            font-size: 40px;
            font-weight: 700;
            color: #390e70;
            margin-bottom: 20px;
        }

        .hero-section .tagline {
            font-size: 30px;
            font-weight: 700;
            color: black;
            margin-bottom: 20px;
        }

        .hero-section .headline {
            font-size: 24px;
            font-weight: 400;
            color: black;
            margin-bottom: 20px;
            font-family: 'Times New Roman, Times, serif';
        }

        .hero-section .slider-button a {
            font-size: 20px;
            font-weight: 700;
            color: white;
            background-color: #390e70;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .about-right {
            padding-right: 20px;
        }

        /* .three_line_title a {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 18px;
                text-align: justify;
                height: 54px;
                color: rgb(3, 80, 111);
                border-bottom: 1px solid #1d0a30;
                margin: 8px 0;

                margin: 8px 0;
            }

            .three_line_title a:hover {
                color: maroon;
            }

            .four_line_short_description {
                display: -webkit-box;
                -webkit-line-clamp: 4;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-align: justify;
                color: #222;
            }

            .four_line_short_description:hover {
                color: #111;
            } */

        .contact-form-wrapper {
            padding: 20px;
            background: #0E264F;
            border-radius: 8px;
            height: 540px;
        }

        .contact-form-wrapper textarea {
            height: 160px;
            resize: none;
        }

        .home-contact-form input.form-control,
        .home-contact-form textarea.form-control {
            /* width: 100%;
                                                padding: 10px;
                                                margin: 5px 0 10px 0;
                                                display: inline-block;
                                                border: 1px solid #ccc;
                                                border-radius: 4px;
                                                box-sizing: border-box;
                                                background: green; */
        }

        .msg-button {
            background-color: #ffffff !important;
            color: #000000 !important;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
    </style>
@endpush

@push('scripts')
    <script type="text/javascript">
        $('document').ready(function() {
            $('#message-form').on('submit', function(event) {
                event.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var data = form.serialize();
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        $('#message-response').text(response.message);
                        $('#message-form').trigger('reset');
                    },
                    error: function(error) {
                        $('#message-response').text(error.responseJSON.message);
                    }
                });
            });
        });
    </script>
@endpush
