<div>
    <!-- widget search -->
    <div class="widget_search upper2">
        <form action="{{ route('articles') }}" id="dreamit-form" method="get">
            <input type="search" name="s" value="" placeholder="Search Here" title="Search for:" required>
            <button type="submit" class="icons"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="widget-categories-box">
        <!-- categories title -->
        <div class="categories-title">
            <h4> Post Categories </h4>
        </div>
        <!-- widget categories menu -->
        <div class="widget-categories-menu">
            <ul>
                @foreach ($article->categories as $category)
                    <li>
                        <a href="#"> {{ $category->name }} <span><i class="fas fa-arrow-right"></i></span></a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="widget-categories-box">
        <!-- categories title -->
        <div class="categories-title">
            <h4> Recent Articles </h4>
        </div>
        @foreach ($recent_articles as $r_article)
            <div class="sidber-widget-recent-post">
                <div class="recent-widget-thumb">
                    <a href="{{ route('article', $r_article) }}">
                        <img style="width: 80px;"
                            src="{{ asset('storage/articles/150x150/' . basename($r_article->image)) }}"
                            alt=""></a>
                </div>
                <div class="recent-widget-contents p-1">
                    <a class="d-block" href="{{ route('article', $r_article) }}">{{ $r_article->name }}</a>
                    <span>{{ $r_article->created_at->format('d M Y') }} </span>
                    <span>Read: {{ $r_article->read }} </span>
                </div>
            </div>
        @endforeach


    </div>
    {{-- <div class="widget-categories-box">
        <!-- categories title -->
        <div class="categories-title">
            <h4> Achievement </h4>
        </div>
        <div class="widget-achivement">
            <ul>
                <li><a href="blog-details.html#"><i class="fas fa-angle-right"></i> 01 February 2015
                        <span>(14)</span></a></li>
            </ul>
        </div>
    </div> --}}
    {{-- <div class="widget-categories-box">
        <div class="categories-title">
            <h4> Gallery </h4>
        </div>
        <div class="widget-gallery">
            <div class="widget-gallery-thumb">
                <a href="blog-details.html#"><img src="assets/images/resource/gallery1.jpg" alt=""></a>
            </div>
          
        </div>
    </div> --}}
    <div class="widget-categories-box">
        <!-- categories title -->
        <div class="categories-title">
            <h4> Tags </h4>
        </div>
        <div class="sidebar-tag-item style-two">
            <ul>
                @foreach ($article->tags as $tag)
                    <li><a href="">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
