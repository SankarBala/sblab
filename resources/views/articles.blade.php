@extends('layouts.app')
@section('content')
    <x-breadcrumb title="Articles" />

    <div class="blog-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row pt-3">
                        @if (count($articles) == 0)
                            <div class="col-12">
                                <div class="alert alert-danger">No articles found</div>
                            </div>
                        @endif
                        @foreach ($articles as $article)
                            <div class="col-md-6">
                                {{-- <div class="blog-single-box">
                                    <div class="blog-thumb">
                                        <a href="article.blade.php">
                                            <img src="assets/images/resource/blog3.png" alt=""></a>
                                    </div>
                                    <div class="dentist-blog-meta-left">
                                        <div class="blog-meta-top">
                                            Posted at: <span>{{ $article->created_at->format('M d, Y') }} </span>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title">
                                                <h6><a class="text-start text-dark"
                                                        href="{{ route('article', $article) }}">{{ $article->name }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                @include('components.article', ['article' => $article])
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <x-articles-sidebar />
                </div>
            </div>
        </div>
    </div>
@endsection
