<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Hostbit</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('css')
</head>
<body>
    @include('partials.header')



    @yield('content')



   <!-- jQuery -->
<script src="{{ asset('assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Plugin & Active -->
<script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
<script src="{{ asset('assets/js/active.js') }}"></script>

    @stack('js')
    @include('partials.footer')
</body>
</html>