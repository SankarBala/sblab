<ul class="nav_scroll">
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About US</a></li>
    <li><a href="#">Products <span><i class="fas fa-chevron-down"></i></span></a>
        @if (count($divisions) > 0)
            <ul class="sub-menu">
                <li><a href="{{ route('products') }}">Products <br /> All Division</a></li>
                @foreach ($divisions as $division)
                    <li><a href="{{ route('division', $division) }}">{{ $division->name }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
    <li><a href="{{ route('articles') }}">Articles</a></li>
    <li><a href="{{ route('contact') }}">Contact US</a></li>
    <li><a href="{{ route('faq') }}">FAQ</a></li>
</ul>
