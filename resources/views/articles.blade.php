@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Articles"/>

    <div class="blog-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="blog-single-box style-two">
                                <div class="blog-thumb">
                                    <a href="article.blade.php"><img src="assets/images/resource/blog3.png" alt=""></a>
                                </div>
                                <div class="dentist-blog-meta-left">
                                    <div class="blog-meta-top">
                                        <a href="blog-grid.html#">Dentist</a><span> September 06, 2023</span>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h2><a href="article.blade.php">Facts About Dental ImplantRecovery
                                                    Process</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-single-box style-two">
                                <div class="blog-thumb">
                                    <a href="article.blade.php"><img src="assets/images/resource/blog1.png" alt=""></a>
                                </div>
                                <div class="dentist-blog-meta-left">
                                    <div class="blog-meta-top">
                                        <a href="blog-grid.html#">Dentist</a><span>September 06, 2023</span>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-title">
                                            <h2><a href="article.blade.php">Taking Care of Your Teeth Home with
                                                    Candid</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-article-sidebar/>
                </div>
            </div>
        </div>
    </div>
@endsection
