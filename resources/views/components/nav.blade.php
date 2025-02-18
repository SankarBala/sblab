<ul class="nav_scroll">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About US</a></li>
    <li><a href="#">Products <span><i class="fas fa-chevron-down"></i></span></a>
        @if (count($divisions) > 0)
            <ul class="sub-menu">
                @foreach ($divisions as $division)
                    <li><a href="#">{{$division->title}}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
    <li><a href="#">Articles <span><i class="fas fa-chevron-down"></i></span></a>
        <ul class="sub-menu">
            <li><a href="#">Shop</a></li>
        </ul>
    </li>
    <li><a href="{{ route('contact') }}">Contact US</a></li>
    <li><a href="{{ route('faq') }}">FAQ</a></li>
    <li><a target="_blank" href="{{ route('admin.dashboard') }}">Admin</a></li>
</ul>
