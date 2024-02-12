<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Store | @yield('title')</title>
    {{-- Links --}}
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    @yield('head')
</head>

<body>
    {{-- Header --}}
    @include('parts.header-front')

    {{-- Content --}}
    @hasSection('header')
        @include('parts.hero')
    @endif

    <main class="container mt-5">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('parts.footer-front')

    {{-- Scripts --}}
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
