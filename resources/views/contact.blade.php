@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Contact Us" />

    <div class="service-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="service-single-box style-two three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/resource/contact-icon1.png') }}" alt="" />
                        </div>
                        <div class="service-content">
                            <a href="contact.html#">Office Location</a>
                            <p>{{ $options->get('address') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-single-box style-two three">
                        <div class="service-icon">
                            <img src="{{ asset('assets/images/resource/contact-icon2.png') }}" alt="" />
                        </div>
                        <div class="service-content">
                            <a href="contact.html#">Contact</a>
                            <p>{{ $options->get('phone') }} </br>{{ $options->get('email') }}</p>
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
                    <img src="{{ asset('assets/images/sbl/footer_logo.png') }}" alt="contact us" style="width:80%"/>
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
                                <form id="message-form" action="{{ route('store_message') }}" class="form-controls row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" placeholder="Your Name"
                                                type="text" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" placeholder="Your phone number"
                                                type="text" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" size="40" value="" type="text"
                                                name="email" placeholder="Your Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <textarea class="form-control mb-2" cols="20" rows="7" placeholder="Write Message" name="message"></textarea>
                                            <span id="message-response" class="text-light">&nbsp;</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-right">
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
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4343.456803074698!2d90.41233592574451!3d23.7332092526258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1740685907697!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <style>
        .service-single-box {
            height: 300px;
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
