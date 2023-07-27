<header class="website_header">
    <div class="container">
        <nav class="hidden md:flex w-1/3">
            <a href="{{ route('home') }}" class="@if (request()->routeIs('home')) active @endif">
                Inicio
            </a>
            <a href="{{ route('about') }}" class="@if (request()->routeIs('about')) active @endif">
                ¿Quiénes somos?
            </a>
        </nav>

        <div class="w-1/3 flex items-center justify-center">
            <a href="#">
                <img src="{{ asset('img/centro-luken-logo.svg') }}" class="website_logo" alt="Centro Luken - De Estrategias en Agua y Medio Ambiente">
            </a>
        </div>

        <nav class="hidden md:flex w-1/3 justify-end">
            <a href="#">
                Servicios
            </a>
            <a href="#" class="btn btn-primary btn-sm">
                Contáctanos
            </a>
        </nav>

        <nav class="block md:hidden ml-auto">
            <a href="#">
                <i class="fa fa-2x fa-bars"></i>
            </a>
        </nav>
    </div>
</header>