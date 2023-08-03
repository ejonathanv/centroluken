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
            <a href="{{ route('home') }}">
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

        <nav class="block md:hidden ml-auto relative">
            <a href="#" id="mobile-menu-trigger" @click.prevent="toggleMobileMenu">
                <i class="fa fa-2x fa-bars"></i>
            </a>
        </nav>
    </div>
</header>

<div v-if="showMobileMenu" class="mobileMenu">
    <div class="flex items-center justify-between w-full">
        <div>
            <a href="#">
                <img src="{{ asset('img/centro-luken-logo.svg') }}" class="website_logo" alt="Centro Luken - De Estrategias en Agua y Medio Ambiente">
            </a>
        </div>

        <div class="flex items-end">
            <a href="#" class="inline-block" @click.prevent="toggleMobileMenu">
                <i class="fa fa-2x fa-times"></i>
            </a>
        </div>
    </div>
    <nav>
        <a href="{{ route('home') }}" class="@if (request()->routeIs('home')) active @endif">
            Inicio
        </a>
        <a href="{{ route('about') }}" class="@if (request()->routeIs('about')) active @endif">
            ¿Quiénes somos?
        </a>
        <a href="#">
            Servicios
        </a>
        <a href="#">
            Contáctanos
        </a>
    </nav>
    <p class="text-xs">
        &copy; {{ date('Y') }} Centro Luken, Derechos Reservados.
    </p>
</div>