<div class="blog-right-side">
    <div class="widget widget_search">
        <div class="search">
            <form action="#" method="POST">
                <input type="text" name="search" value="" placeholder="Search Here" title="Search for:"
                       required>
                <button type="submit" class="icons"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="widget widget_calendar">
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
    </div>
    <div class="widget widget_categories">
        <h2 class="widget-title">Categories</h2>
        <ul>
            <li class="cat-item cat-item-3"><a href="blog-list.html#">Health</a></li>
        </ul>
    </div>
    <div class="widget widget_recent_data">
        <div class="single-widget-item">
            <div class="recent-post-item style-two">
                <div class="recent-post-image">
                    <a href="blog-list.html#"><img src="assets/images/resource/recent1.png" alt=""></a>
                </div>
                <div class="recent-post-text">
                    <h4><a href="blog-list.html#">Facts About Dental Implant Recovery Process </a>
                    </h4>
                    <span class="rcomment">September 06, 2023</span>
                </div>
            </div>
        </div>
        <div class="single-widget-item style-two">
            <div class="recent-post-item">
                <div class="recent-post-image">
                    <a href="blog-list.html#"><img src="assets/images/resource/recent2.png" alt=""></a>
                </div>
                <div class="recent-post-text">
                    <h4><a href="blog-list.html#">How Long Does It Take To Whiten</a></h4>
                    <span class="rcomment">September 06, 2023</span>
                </div>
            </div>
        </div>
        <div class="single-widget-item">
            <div class="recent-post-item style-two">
                <div class="recent-post-image">
                    <a href="blog-list.html#"><img src="assets/images/resource/recent1.png" alt=""></a>
                </div>
                <div class="recent-post-text">
                    <h4><a href="blog-list.html#">Facts About Dental Implant Recovery Process </a>
                    </h4>
                    <span class="rcomment">September 06, 2023</span>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script src="{{asset('assets/js/jquery.celendar.js')}}"></script>
@endpush
