<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }} ScyCode</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{-- @yield('styles') --}}
    {{-- ===== --}}
    {{-- @isset($styles)
        {{ $styles }}
    @endisset --}}
    {{-- ==== --}}
    {{-- {{ $styles }} --}}
</head>

<body class="antialiased">
    {{-- @include('layout.navbar') --}}
    <x-navbar></x-navbar>
    {{ $slot }}
    {{-- <a href="/">next</a> --}}
    <script src="public/js/bootstrap.min.js"></script>
</body>

</html>
