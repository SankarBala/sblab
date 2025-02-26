<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    @stack('styles')
</head>

<body class="hold-transition login-page">
    @yield('content')
    @stack('scripts')
</body>

</html>
