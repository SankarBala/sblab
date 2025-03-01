<div class="blog-right-side">
    <div class="widget widget_search">
        <div class="search">
            <form action="{{ route('articles') }}" method="get">
                <input type="search" name="search" value="" placeholder="Search Here" title="Search for:" required>
                <button type="submit" class="icons"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    {{-- <div class="widget widget_calendar">
        <div class="wrapper">
            <div class="calendar">
                <ul class="weeks">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                </ul>
                <ul class="days"></ul>
            </div>
            <div class="current-month">
                <p class="current-date"></p>
            </div>
        </div>
    </div> --}}
    {{-- <div class="widget widget_categories">
        <h2 class="widget-title">Categories</h2>
        <ul>
            <li class="cat-item cat-item-3"><a href="blog-list.html#">Health</a></li>
        </ul>
    </div> --}}
    {{-- <div class="widget-categories-box">
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
    </div> --}}
    <div class="widget widget_recent_data">
        <div class="categories-title">
            <h4> Popular Articles </h4>
        </div>
        @foreach ($most_reads as $read)
        <div class="single-widget-item">
            <div class="recent-post-item style-two">
                <div class="recent-post-image">
                    <a href="blog-list.html#"><img src="" alt=""></a>
                </div>
                <div class="recent-post-text">
                    <h4><a href="blog-list.html#">{{$read->name}}</a>
                    </h4>
                    <span class="rcomment">{{$read->created_at->format('M d, Y')}}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@push('scripts')
    {{-- <script src="{{ asset('assets/js/jquery.celendar.js') }}"></script> --}}
@endpush
