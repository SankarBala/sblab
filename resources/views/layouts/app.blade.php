<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" sizes="56x56" href='{{ asset('assets/images/sbl/favicon.png') }}'>
    <link rel="stylesheet" href='{{ asset('assets/css/bootstrap.min.css') }}' type="text/css" media="all">
    <link rel="stylesheet" href='{{ asset('assets/css/style.css') }}' type="text/css" media="all">
    <link rel="stylesheet" href='{{ asset('assets/css/responsive.css') }}' type="text/css" media="all">
    <script src='{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}'></script>
    
    <!--<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-default.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('assets/css/loftloader.min.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/animated-text.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/css/venobox/venobox.css') }}">-->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <x-header />

    @yield('content')

    <x-footer />

    {{-- <div id="progress" class="progress hide"> --}}
    {{--    <div id="progress-value"></div> --}}
    {{-- </div> --}}

    <script src='{{ asset('assets/js/vendor/jquery-3.6.2.min.js') }}'></script>
    <script src='{{ asset('assets/js/popper.min.js') }}'></script>
    <script src='{{ asset('assets/js/bootstrap.min.js') }}'></script>
    <script src='{{ asset('assets/js/owl.carousel.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.counterup.min.js') }}'></script>
    <script src='{{ asset('assets/js/waypoints.min.js') }}'></script>
    <script src='{{ asset('assets/js/wow.js') }}'></script>
    <script src='{{ asset('assets/js/imagesloaded.pkgd.min.js') }}'></script>
    <script src='{{ asset('venobox/venobox.js') }}'></script>
    <script src='{{ asset('assets/js/animated-text.js') }}'></script>
    <script src='{{ asset('venobox/venobox.min.js') }}'></script>
    <script src='{{ asset('assets/js/isotope.pkgd.min.js') }}'></script>
    <script src='{{ asset('assets/js/jquery.meanmenu.js') }}'></script>
    {{-- <script src='{{asset("assets/js/jquery.scrollUp.js")}}'></script> --}}
    <script src='{{ asset('assets/js/custom.js') }}'></script>
    <script>
        // CSRF Token setup for AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
