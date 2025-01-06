<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta-description', 'Empleamos conocimiento técnico con base en experiencia práctica e investigación aplicada para crear proyectos colaborativos que faciliten la toma de decisiones de entidades públicas y privadas.')">
        <meta name="keywords" content="Centro Luken, Luken, Agua, Recursos Naturales, Gestión, Estrategias, Proyectos, Investigación, Toma de decisiones, Entidades públicas, Entidades privadas, Medio físico, Medio social, Medio ambiente, Medio natural, Medio urbano, Medio rural, Medio marino, Medio costero, Medio lacustre, Medio fluvial, Medio atmosférico, Medio terrestre, Medio edáfico, Medio geológico, Medio hidrológico, Medio hidrogeológico, Medio hidrobiológico, Medio hidroquímico, Medio hidrometeoroló">

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('img/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <title>@yield('title', 'Bienvenidos') | {{ config('app.name', 'Centro Luken') }}</title>

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

        {{--
        @if(!Cookie::get('hide-banner-intro'))
        <x-banner-intro />
        @endif
        --}}

        @if(!$header)
        <x-website-header />
        @else
        <x-website-header2 />
        @endif
        <div class="min-h-screen">
            {{ $slot }}
        </div>
        <x-website-footer />
    </body>
</html>
