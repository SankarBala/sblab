@extends('layouts.app')
@section('content')

    <x-breadcrumb title="Contact Us"/>

    <div class="service-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-single-box style-two three">
                        <div class="service-icon"><img src="assets/images/resource/contact-icon1.png" alt=""></div>
                        <div class="service-content">
                            <a href="contact.html#">Location</a>
                            <p>40 Park Ave, Brooklyn, <br> New York, New York 1111</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-single-box style-two three">
                        <div class="service-icon"><img src="assets/images/resource/contact-icon2.png" alt=""></div>
                        <div class="service-content">
                            <a href="contact.html#">Contact</a>
                            <p>+1 800 000 111 <br> contact@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-single-box style-two three">
                        <div class="service-icon"><img src="assets/images/resource/contact-icon3.png" alt=""></div>
                        <div class="service-content">
                            <a href="contact.html#">Comfortable Office</a>
                            <p>Lunch: 12PM – 2PM <br> Dinner: 6PM – 10PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us-section mb-2">
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
                                <div class="title"><h2>Advanced technology for dental care</h2></div>
                                <div class="description"><p>Curabitur sagittis libero tincidunt finibus.</p></div>
                            </div>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title"><h2>Available emergency dental services</h2></div>
                                <div class="description"><p>Curabitur sagittis libero tincidunt finibus.</p></div>
                            </div>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title"><h2>Our best qualified dentist doctor team</h2></div>
                                <div class="description"><p>Curabitur sagittis libero tincidunt finibus.</p></div>
                            </div>
                        </div>
                        <div class="choose-us-icon-box d-flex">
                            <div class="choose-us-icon">
                                <div class="icon"><i class="fas fa-check"></i></div>
                            </div>
                            <div class="icon-box-content">
                                <div class="title"><h2>Our best qualified dentist doctor team</h2></div>
                                <div class="description"><p>Curabitur sagittis libero tincidunt finibus.</p></div>
                            </div>
                        </div>
                        <div class="section-button"><a href="contact.html#">Dental Services</a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose_us_right">
                        <div class="choose-us-title right">
                            <h5>Have some questions or want to say hi?</h5>
                            <p>Our experts and developers would love to contribute their expertise and insights to your
                                potencial projects</p>
                        </div>
                        <div class="form-area contact-form">
                            <div class="form-inner">
                                <form action="https://formspree.io/f/myyleorq" method="POST" class="form-controls row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" placeholder="Your Name*" type="text"
                                                   name="sub" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" value="" type="text" name="sub"
                                                   placeholder="Your Email Address*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" cols="20" rows="7"
                                                      placeholder="Write Message" name="textarea-234"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="form-btn" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-section">
        <div class="container-fluids">
            <div class="row">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.226637710711!2d90.38657937599397!3d23.739296189201305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c71927841%3A0xde102c300beb3f0c!2sWebCode%20Institute!5e0!3m2!1sen!2sbd!4v1693988373439!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
