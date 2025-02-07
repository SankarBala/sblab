<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="56x56" href='{{asset("assets/images/fav-icon/icon.png")}}'>
    <link rel="stylesheet" href='{{asset("assets/css/bootstrap.min.css")}}' type="text/css" media="all">
    <link rel="stylesheet" href='{{asset("assets/css/style.css")}}' type="text/css" media="all">
    <link rel="stylesheet" href='{{asset("assets/css/responsive.css")}}' type="text/css" media="all">
    <script src='{{asset("assets/js/vendor/modernizr-3.5.0.min.js")}}'></script>

    <link href="https://fonts.cdnfonts.com/css/clash-display" rel="stylesheet">
    @stack('styles')
</head>

<body>
<x-header/>

@yield('content')

<x-footer/>

<div id="progress" class="progress hide">
    <div id="progress-value"></div>
</div>

<script src='{{asset("assets/js/vendor/jquery-3.6.2.min.js")}}'></script>
<script src='{{asset("assets/js/popper.min.js")}}'></script>
<script src='{{asset("assets/js/bootstrap.min.js")}}'></script>
<script src='{{asset("assets/js/owl.carousel.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.counterup.min.js")}}'></script>
<script src='{{asset("assets/js/waypoints.min.js")}}'></script>
<script src='{{asset("assets/js/wow.js")}}'></script>
<script src='{{asset("assets/js/imagesloaded.pkgd.min.js")}}'></script>
<script src='{{asset("venobox/venobox.js")}}'></script>
<script src='{{asset("assets/js/animated-text.js")}}'></script>
<script src='{{asset("venobox/venobox.min.js")}}'></script>
<script src='{{asset("assets/js/isotope.pkgd.min.js")}}'></script>
<script src='{{asset("assets/js/jquery.meanmenu.js")}}'></script>
<script src='{{asset("assets/js/jquery.scrollUp.js")}}'></script>
<script src='{{asset("assets/js/custom.js")}}'></script>
@stack('scripts')

</body>
</html>
