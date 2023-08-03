<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/133291f590.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery-3.7.0.min.js') }}" defer></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased bg-white" id="app">
        <x-website-header />
        <div class="min-h-screen">
            {{ $slot }}
        </div>
        <x-website-footer />
    </body>
</html>
