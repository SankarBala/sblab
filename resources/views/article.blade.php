@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Article" />

    <div class="blog-detials-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-details-meta text-dark p-0">
                                    <span class=""><i class="far fa-calendar-alt"></i>
                                        {{ $article->created_at->format('M d, Y') }}</span>
                                    {{-- <span><i class="far fa-comments"></i> 3 Comments</span> --}}
                                </div>
                                <div class="blog-details-content">
                                    <h2>{{ $article->name }}</h2>
                                </div>
                                <div class="blog-details-thumb">
                                    <img src="assets/images/resource/blog-details1.jpg" alt="">
                                </div>
                                <div class="blog-details-des">
                                    {!! $article->description !!}
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <button class="btn btn-sm btn-info rounded">Read More</button>
                            </div> --}}
                            <div class="col-12 mt-4">
                                <div class="blog-details-social">
                                    <a href="blog-details.html#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="blog-details.html#"><i class="fab fa-twitter"></i></a>
                                    <a href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>

                            {{-- <div class="col-lg-12">
                                <div class="blog-details-content">
                                    <h3>2 Comments</h3>
                                </div>
                                <div class="blog-details-comment">
                                    <div class="blog-details-comment-reply">
                                        <a href="blog-details.html#">Reply</a>
                                    </div>
                                    <div class="blog-details-comment-thumb">
                                        <img src="assets/images/resource/comment1.png" alt="">
                                    </div>
                                    <div class="blog-details-comment-content">
                                        <h2>Michael jordan</h2>
                                        <span>11 September, 2023</span>
                                        <p>Nulla vitae orci luctus risus tristique sollicitudin sed at quam. Nulla sem
                                            dui, faucibus sit amet justo sed, laoreet ornare leo. </p>
                                    </div>
                                </div>
                                <div class="blog-details-comment reply">
                                    <div class="blog-details-comment-reply">
                                        <a href="blog-details.html#">Reply</a>
                                    </div>
                                    <div class="blog-details-comment-thumb">
                                        <img src="assets/images/resource/comment2.png" alt="">
                                    </div>
                                    <div class="blog-details-comment-content">
                                        <h2>Angel Jara</h2>
                                        <span>15 September, 2023</span>
                                        <p>Hello vitae orci luctus risus tristique sollicitudin sed at quam. Karet sem
                                            dui, faucibus sit amet justo sed, ornare deo </p>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-details-contact">
                                <div class="blog-details-content">
                                    <h3>Post Comment</h3>
                                </div>
                                <form action="https://formspree.io/f/myyleorq" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Name" placeholder="Full Name"
                                                    autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="input-box">
                                                <input type="text" name="Your Email" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="input-box">
                                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
                                            </div>
                                            <div class="input-button">
                                                <button type="submit">Submit Now <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="status"></div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <x-article-sidebar :article="$article"/>
                </div>
            </div>
        </div>
    </div>
@endsection
