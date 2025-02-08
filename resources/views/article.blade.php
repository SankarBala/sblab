@extends('layouts.app')
@section('content')
    <div class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <div class="breadcumb-title"><h2>Blog Grid</h2></div>
                    <div class="breadcumb-inner">
                        <ul>
                            <li><a href="home.blade.php">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="articles.blade.php">Articles</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Article Title</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-detials-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-main">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-details-meta">
                                    <span><i class="far fa-user"></i> By Admin</span>
                                    <span><i class="far fa-calendar-alt"></i> January 15 2023</span>
                                    <span><i class="far fa-comments"></i> 3 Comments</span>
                                </div>
                                <div class="blog-details-content">
                                    <h2>On the other hand, we denounce with righteous</h2>
                                    <p>Integer pretium dolor id ligula elementum, at vulputate dolor accumsan. Nam eget
                                        massa et erat iaculis posuere id a neque. Morbi bibendum nisi vel eros ultrices,
                                        fringilla tincidunt nibh vehicula. Integer id nisl turpis. Aliquam sed ipsum
                                        quis nulla finibus rhoncus sit amet id nunc. Nunc justo quam, egestas a dictum
                                        ac, imperdiet eu diam.</p>
                                </div>
                                <div class="blog-details-thumb">
                                    <img src="assets/images/resource/blog-details1.jpg" alt="">
                                </div>
                                <div class="blog-details-des">
                                    <p>Vestibulum felis sapien, aliquam vitae dolor ac, ornare eleifend elit. Nam
                                        pharetra nibh eu erat gravida, eu aliquam arcu euismod. Mauris varius elit quis
                                        ex malesuada, non tristique arcu iaculis. Suspendisse risus purus, ullamcorper
                                        pellentesque faucibus vel, aliquet non purus. Interdum et malesuada fames ac
                                        ante ipsum primis in faucibus. Vestibulum lacus augue, blandit aliquam laoreet
                                        at, sodales in dolor.</p>
                                    <p>Nulla vitae orci luctus risus tristique sollicitudin sed at quam. Nulla sem dui,
                                        faucibus sit amet justo sed, laoreet ornare leo. In eleifend turpis tellus, a
                                        luctus eros imperdiet vitae. Ut vitae maximus enim. In eleifend augue ac est
                                        ultrices convallis. Integer eget porta ex. Vivamus eu lorem semper,</p>
                                </div>
                                <div class="blog-details-blockquote">
                                    <blockquote>Nulla vitae orci luctus risus tristique sollicitudin sed at quam. Nulla
                                        sem dui, faucibus sit amet justo sed, laoreet ornare leo. In eleifend turpis
                                        tellus, a luctus eros imperdiet
                                    </blockquote>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-details-video-thumb">
                                    <img src="assets/images/resource/blog-details2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog-details-video-thumb">
                                    <div class="blog-details-video-thumb-inner">
                                        <img src="assets/images/resource/blog-details3.jpg" alt="">
                                    </div>
                                    <div class="video-icon">
                                        <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                           data-autoplay="true" href="https://youtu.be/BS4TUd7FJSg"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-details-content">
                                    <h3>A cleaner port. A brighter future.</h3>
                                    <p>Nulla vitae orci luctus risus tristique sollicitudin sed at quam. Nulla sem dui,
                                        faucibus sit amet justo sed, laoreet ornare leo. In eleifend turpis tellus, a
                                        luctus eros imperdiet vitae. Ut vitae maximus enim. In eleifend augue ac est
                                        ultrices convallis. Integer eget porta ex. Vivamus eu lorem semper,</p>
                                </div>
                                <div class="blog-details-content-list">
                                    <p><i class="fas fa-check"></i> The right logistics decision for your firm</p>
                                    <p><i class="fas fa-check"></i> Logistics company with logistics solutions.</p>
                                    <p><i class="fas fa-check"></i> Planning for the region’s economic future.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-details-button">
                                    <a href="blog-details.html#">Web Design</a>
                                    <a href="blog-details.html#">Logistics</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog-details-social">
                                    <a href="blog-details.html#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="blog-details.html#"><i class="fab fa-twitter"></i></a>
                                    <a href="blog-details.html#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="blog-details-author">
                                    <div class="blog-details-author-inner">
                                        <div class="blog-details-author-thumb">
                                            <img src="assets/images/resource/author-blog.png" alt="">
                                        </div>
                                        <div class="blog-details-author-content">
                                            <h2>David beckham</h2>
                                            <p>Proin dignissim consectetur est eu aliquam. In ut ligula eget ex sodales
                                                placerat et nec nibh. Pellentesque finibus erat tempor ultricies
                                                vestibulum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
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
                                                <textarea name="message" id="message" cols="30" rows="10"
                                                          placeholder="Your Message..."></textarea>
                                            </div>
                                            <div class="input-button">
                                                <button type="submit">Submit Now <i class="fas fa-arrow-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="status"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <!-- widget search -->
                    <div class="widget_search upper2">
                        <form action="blog-details.html#" id="dreamit-form">
                            <input type="text" name="s" value="" placeholder="Search Here" title="Search for:" required>
                            <button type="submit" class="icons"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget-categories-box">
                        <!-- categories title -->
                        <div class="categories-title">
                            <h4> Category </h4>
                        </div>
                        <!-- widget categories menu -->
                        <div class="widget-categories-menu">
                            <ul>
                                <li><a href="articles.blade.php"> Orthopedic Care<span><i
                                                class="fas fa-arrow-right"></i></span></a></li>
                                <li><a href="articles.blade.php"> Gynecology Care<span><i
                                                class="fas fa-arrow-right"></i></span></a></li>
                                <li><a href="articles.blade.php"> Primary Care<span><i
                                                class="fas fa-arrow-right"></i></span></a></li>
                                <li><a href="articles.blade.php"> Cancer Care <span><i
                                                class="fas fa-arrow-right"></i></span></a></li>
                                <li><a href="articles.blade.php"> Dentistry Care<span><i class="fas fa-arrow-right"></i></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-categories-box">
                        <!-- categories title -->
                        <div class="categories-title">
                            <h4> Recent Post </h4>
                        </div>
                        <div class="sidber-widget-recent-post">
                            <div class="recent-widget-thumb">
                                <img src="assets/images/resource/recend1.jpg" alt="">
                            </div>
                            <div class="recent-widget-content">
                                <a href="blog-details.html#">Feel the real experience</a>
                                <span><i class="flaticon-calendar"></i> Jan, 26 2023</span>
                            </div>
                        </div>
                        <div class="sidber-widget-recent-post">
                            <div class="recent-widget-thumb">
                                <img src="assets/images/resource/recend2.jpg" alt="">
                            </div>
                            <div class="recent-widget-content">
                                <a href="blog-details.html#">Feel the real experience</a>
                                <span><i class="flaticon-calendar"></i> Jan, 18 2023</span>
                            </div>
                        </div>
                        <div class="sidber-widget-recent-post">
                            <div class="recent-widget-thumb">
                                <img src="assets/images/resource/recend3.jpg" alt="">
                            </div>
                            <div class="recent-widget-content">
                                <a href="blog-details.html#">Feel the real experience</a>
                                <span><i class="flaticon-calendar"></i> Jan, 15 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-categories-box">
                        <!-- categories title -->
                        <div class="categories-title">
                            <h4> Achievement </h4>
                        </div>
                        <div class="widget-achivement">
                            <ul>
                                <li><a href="blog-details.html#"><i class="fas fa-angle-right"></i> 01 February 2015
                                        <span>(14)</span></a></li>
                                <li><a href="blog-details.html#"><i class="fas fa-angle-right"></i> 01 March 2006 <span>(10)</span></a>
                                </li>
                                <li><a href="blog-details.html#"><i class="fas fa-angle-right"></i> 01 August 2001
                                        <span>(03)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-categories-box">
                        <!-- categories title -->
                        <div class="categories-title">
                            <h4> Gallery </h4>
                        </div>
                        <div class="widget-gallery">
                            <div class="widget-gallery-thumb">
                                <a href="blog-details.html#"><img src="assets/images/resource/gallery1.jpg" alt=""></a>
                            </div>
                            <div class="widget-gallery-thumb">
                                <a href="blog-details.html#"><img src="assets/images/resource/gallery2.jpg" alt=""></a>
                            </div>
                            <div class="widget-gallery-thumb">
                                <a href="blog-details.html#"><img src="assets/images/resource/gallery3.jpg" alt=""></a>
                            </div>
                            <div class="widget-gallery-thumb">
                                <a href="blog-details.html#"><img src="assets/images/resource/gallery4.jpg" alt=""></a>
                            </div>
                            <div class="widget-gallery-thumb">
                                <a href="blog-details.html#"><img src="assets/images/resource/gallery5.jpg" alt=""></a>
                            </div>
                            <div class="widget-gallery-thumb">
                                <a href="blog-details.html#"><img src="assets/images/resource/gallery6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-categories-box">
                        <!-- categories title -->
                        <div class="categories-title">
                            <h4> Tags </h4>
                        </div>
                        <div class="sidebar-tag-item style-two">
                            <ul>
                                <li><a href="blog-details.html#">Medical</a></li>
                                <li><a href="blog-details.html#">Dector</a></li>
                                <li><a href="blog-details.html#">Business</a></li>
                                <li><a href="blog-details.html#">Farms</a></li>
                                <li><a href="blog-details.html#">Support</a></li>
                                <li><a class="item1" href="blog-details.html#">Management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
