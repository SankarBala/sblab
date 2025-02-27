<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}" />
    @stack('styles')
</head>

<body class="hold-transition login-page">
    @yield('content')
    
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}" defer></script>
    @if (session()->has('success') || session()->has('error') || session()->has('warning'))
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                @if (session('success'))
                    toastr.success(@json(session('success')));
                @endif

                @if (session('error'))
                    toastr.error(@json(session('error')));
                @endif

                @if (session('warning'))
                    toastr.warning(@json(session('warning')));
                @endif
            });
        </script>
    @endif
    @stack('scripts')
</body>

</html>
