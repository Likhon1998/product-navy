<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title>@yield('title', config('app.name'))</title>

    {{-- ===== CSS Links ===== --}}
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>

    @yield('content')

    {{-- ===== JS Links ===== --}}
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/animate.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-script.js') }}"></script>

    @stack('scripts')
</body>
</html>
