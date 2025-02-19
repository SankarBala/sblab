<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | Control Panel</title>
    
    <link rel="icon" type="image/png" sizes="56x56" href='{{asset("assets/images/sbl/favicon.png")}}'/>
    
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}"/>
    @stack('styles')
</head>
    
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-admin.header/>
        <x-admin.sidebar/>
        @yield('content')
        <x-admin.footer/>
    </div>

    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}" defer></script>
    <script src="{{asset('dist/js/adminlte.min.js')}}" defer></script>
    <script src="{{asset('plugins/toastr/toastr.min.js')}}" defer></script>
            
    @if(session()->has('success') || session()->has('error') || session()->has('warning'))
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            @if(session('success'))
                toastr.success(@json(session('success')));
            @endif

            @if(session('error'))
                toastr.error(@json(session('error')));
            @endif

            @if(session('warning'))
                toastr.warning(@json(session('warning')));
            @endif
        });
    </script>
    @endif
            
    @stack('scripts')
</body>
</html>
