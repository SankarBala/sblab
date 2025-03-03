@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Product" />
    <div class="shop-detials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img class="img-fluid"
                        src="https://image01-in.oneplus.net/media/202406/19/ec64eb41a8e787a798be1b71c13a51bb.png?x-amz-process=image/format,webp/quality,Q_80"
                        alt="">
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="shop-dtls-info">
                        <!-- category title -->
                        <div class="category-titles mt-0 mb-3">
                            <h3>{{ $product->name }}</h3>
                        </div>
                        <!-- category icon -->
                        {{-- <div class="category-icon-list">
                            <ul>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star-fill"></i></li>
                                <li><i class="bi bi-star"></i></li>
                                <li class="category-text"> 4.5(10+ Reviews) </li>
                            </ul>
                        </div> --}}
                        <!-- category price -->
                        <div class="category-price">
                            <h1 class="text-primary">BDT {{ number_format($product->price, 2) }} Tk.</h1>
                        </div>
                        <!-- description -->
                        <div class="category-description text-justify">
                            <p>{{ $product->short_description }}</p>
                        </div>
                        <!-- category color -->
                        {{-- <div class="category-color">
                            <p> Colors <span>Black & Yellow</span></p>
                        </div> --}}
                        {{-- <div class="category-count-button">
                            <!-- product count -->
                            <div class="quantity">
                                <div class="cart-plus-minus">
                                    <input id="quantity2" name="quantity" class="cart-plus-minus-box" value="0"
                                        type="text">
                                    <div class="dec ctnbutton">-</div>
                                    <div class="inc ctnbutton">+</div>
                                </div>
                            </div>
                            <!-- product button -->
                            <div class="category-button">
                                <a href="cart.html">Add to Cart <i class="bi bi-cart3"></i></a>
                            </div>
                        </div> --}}
                        <!-- category table -->
                        <table class="category-table">
                            <tr>
                                <!-- table data -->
                                <td class="table-title align-top">Categories</td>
                                <td class="table-text">
                                    @foreach ($categories as $category)
                                        <a class="btn btn-sm btn-primary px-2 rounded my-1" href="">
                                            {{ $category->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td class="table-title align-top">Tags</td>
                                <td class="table-text">
                                    @foreach ($tags as $tag)
                                        <a class="btn btn-sm btn-info px-2 rounded my-1" href=""> {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="appoinment-tab">
                        <!-- / tab -->
                        <div class="tab">
                            <h2 class="border-bottom pb-2">Product Description</h2>
                            <!-- / tabs -->
                            {{-- <ul class="tabs">
                                <li><a href="shop-details.html#">Description</a></li>
                                <li><a href="shop-details.html#">Additional Info </a></li>
                                <li><a href="shop-details.html#">Review (2)</a></li>
                            </ul> --}}
                            <div class="tab_content">
                                <!-- / tabs_item -->
                                <div class="tabs_item">
                                    <!-- post comment -->
                                    <div class="post-comment-description">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <!-- / tabs_item -->
                                <div class="tabs_item">
                                    <!-- post comment -->
                                    <table class="tab-items-table">
                                        <tr>
                                            <!-- table data -->
                                            <td class="table-title"> Stand Up </td>
                                            <td class="table-text"> : Dental Shower </td>
                                        </tr>
                                        <tr class="tabs-bg">
                                            <!-- table data -->
                                            <td class="table-title"> Colors </td>
                                            <td class="table-text"> : Black, Blue, Purple </td>
                                        </tr>

                                    </table> <!-- widget table End -->
                                </div>
                                <!-- / tabs_item -->
                                <div class="tabs_item">
                                    <!-- post comment -->
                                    <div class="post-comment">
                                        <div class="post-comment-thumb">
                                            <a href="article.blade.php"><img src="assets/images/resource/comnt-pl.png"
                                                    alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <!-- comment icon -->
                                            <ul class="comment-icon-list">
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star"></i></li>
                                            </ul>
                                            <h4 class="post-title">David Alexon <span class="left-date">September 09,
                                                    2023</span></h4>
                                            <p class="posts-reply"> Dramatically reinvent adaptive bandwidth vis reliable
                                                infrastructures to the progressively iterate distributed interfaces. </p>
                                            <span class="rights-reply"> <i class="bi bi-reply-fill"></i>Reply</span>
                                        </div>
                                    </div>
                                    <div class="product-details-respond">
                                        <div class="contact-form-box2">
                                            <!-- sidebar title -->
                                            <div class="sidebar-title">
                                                <h2>Add a Review</h2>
                                            </div>
                                            <!-- sidebar description -->
                                            <div class="sidebar-description">
                                                <p>Your email address will not be published. Required fields are marked *
                                                </p>
                                            </div>
                                            <div class="sidebar-rating-list">
                                                <P class="sidebar-text">Your Ratings</P>
                                                <ul>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-fill"></i></li>
                                                    <li><i class="bi bi-star-half"></i></li>
                                                </ul>
                                            </div>
                                            <!-- contact form box -->
                                            <div class="contact-form-box2">
                                                <form action="https://formspree.io/f/myyleorq" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <h6 class="form-title"> Name*</h6>
                                                            <div class="form-box">
                                                                <input id="name2" name="name" type="text"
                                                                    placeholder="Your Name" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <h6 class="form-title"> Your E-Mail*</h6>
                                                            <div class="form-box">
                                                                <input id="email2" name="email" type="text"
                                                                    placeholder="Enter E-Mail" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-box">
                                                                <h6 class="form-title"> Comment*</h6>
                                                                <textarea name="massage" id="massage" cols="30" rows="10" placeholder="Write Comment" autocomplete="off"
                                                                    required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="contact-form style-two">
                                                                <button type="submit"> Submit </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div id="status"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product-item-title">
                        <h2>Related Products</h2>
                    </div>
                </div>

                @foreach ($related as $rp)
                    @include('components.product', ['product' => $rp])
                @endforeach
            </div>
        </div>
    </div>
@endsection
