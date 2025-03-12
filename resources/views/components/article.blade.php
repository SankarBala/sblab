<div class="blog-single-box">
    <div class="blog-thumb">
        <a href="{{ route('article', $article) }}">
            <img class="img-square" src="{{ asset("storage/{$article->image}") }}" alt="Article Image" />
        </a>
        {{-- <div class="post-categories"><a href="home.html">health</a></div> --}}
    </div>
    <div class="dentist-blog-meta-left">
        <span class="text-dark">
            <i aria-hidden="true" class="far fa-calendar-alt"></i>
            {{ $article->created_at->format('d M Y h:m A') }}
        </span>
        <div class="blog-content">
            <div class="blog-title three_line_title">
                <a href="{{ route('article', $article) }}">{{ $article->name }}</a>
            </div>
            <div class="blog-text four_line_short_description">
                <p>{{ $article->short_description }}</p>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <style>
        .three_line_title a {
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
        }

        /* .img-square {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
        } */
    </style>
@endpush
