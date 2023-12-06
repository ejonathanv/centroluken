<header class="header-2 fixed z-40 top-0 left-0 right-0 bg-white shadow overflow-hidden">
    <div class="w-2/12 md:w-7/12 bg-primary h-full absolute top-0 right-0">
        <img src="{{ asset('img/svg/header-2-curves.svg') }}" alt="" class="absolute w-auto right-full -mr-2 -mt-1" style="height: calc(100% + 7px); max-width: none">
    </div>
    <div class="container relative z-1">
        <div class="flex items-stretch md:items-center">
            <div class="w-4/12 py-5">
                <a href="{{ route('home') }}" class="inline-block">
                    <img src="{{ asset('img/centro-luken-logo.svg') }}" class="website_logo" alt="Centro Luken - De Estrategias en Agua y Medio Ambiente">
                </a>
            </div>
            <div class="flex items-center justify-end w-8/12">
                <nav class="text-white text-sm font-bold flex items-center justify-end space-x-7 hidden md:block">
                    @if($admin)

                    <a href="{{ route('dashboard') }}" class="opacity-50 @if (request()->routeIs('dashboard')) !opacity-100 @endif">
                        Artículos
                    </a>

                    <a href="{{ route('topics.index') }}" class="opacity-50 @if (request()->routeIs('topics*')) !opacity-100 @endif">
                        Temas de interés
                    </a>

                    <a href="{{ route('home') }}" class="opacity-50">
                        Volver al sitio
                    </a>

                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button type="submit" class="opacity-50">
                            Cerrar sesión
                        </button>
                    </form>

                    @else
                    <a href="{{ route('home') }}" class="opacity-50 @if (request()->routeIs('home')) !opacity-100 @endif">
                        {{ __('global.menu.home') }}
                    </a>
                    <a href="{{ route('about') }}" class="opacity-50 @if (request()->routeIs('about')) !opacity-100 @endif">
                        {{ __('global.menu.about') }}
                    </a>
                    <a href="{{ route('blog') }}" class="opacity-50 @if (request()->routeIs('blog')) !opacity-100 @endif">
                        {{ __('global.menu.blog') }}
                    </a>
                    <a href="{{ route('topics') }}" class="opacity-50 @if (request()->routeIs('topics')) !opacity-100 @endif">
                        {{ __('global.menu.topics') }}
                    </a>

                    <a href="{{ route('contact') }}" class="bg-white text-primary px-5 py-2 rounded-full shadow">
                        {{ __('global.menu.contact') }}
                    </a>

                    <a href="#" class="text-lg relative inline-block" @click.prevent="toggleLanguage">
                        <i class="fa fa-globe text-white"></i>
                    </a>
                    @endif
                </nav>

                <a href="#" class="absolute top-0 right-0 mt-8 mr-5 md:hidden" @click.prevent="toggleMobileMenu">
                    <i class="fas fa-bars text-white text-2xl md:hidden"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<div v-if="showLanguage" class="langSelector">
    <div class="content">

        <a href="#" class="close">
            <i class="fa fa-times text-primary text-xl" @click.prevent="toggleLanguage"></i>
        </a>

        <h4>
            {{ __('global.language') }}:
        </h4>

        <nav>
            <a href="{{ route('set-locale', 'es') }}">
                <img src="{{ asset('img/mexico_flag.png') }}" alt="Español" class="w-7 h-auto">
                <span>Español</span>
            </a>

            <a href="{{ route('set-locale', 'en') }}">
                <img src="{{ asset('img/usa_flag.png') }}" alt="English" class="w-7 h-auto">
                <span>English</span>
            </a>
        </nav>
    </div>
</div>

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
        @if($admin)
        <a href="{{ route('dashboard') }}" class="">
            Artículos
        </a>
        <a href="{{ route('home') }}">
            Volver al sitio
        </a>

        <form action="{{ route('logout') }}" method="POST" class="w-full">
            @csrf
            <a href="#">
                <button type="submit">
                    Cerrar sesión
                </button>
            </a>
        </form>
        @else
        <a href="{{ route('home') }}" class="@if (request()->routeIs('home')) active @endif">
            {{ __('global.menu.home') }}
        </a>
        <a href="{{ route('about') }}" class="@if (request()->routeIs('about')) active @endif">
            {{ __('global.menu.about') }}
        </a>
        <a href="{{ route('blog') }}" class="@if (request()->routeIs('about')) active @endif">
            Blog
        </a>
        <a href="{{ route('topics') }}" class="@if (request()->routeIs('topics')) active @endif">
            {{ __('global.menu.topics') }}
        </a>
        <a href="{{ route('contact') }}" class="@if (request()->routeIs('contact')) active @endif">
            {{ __('global.menu.contact') }}
        </a>
        @endif
    </nav>
    <p class="text-xs">
        &copy; {{ date('Y') }} Centro Luken, Derechos Reservados.
    </p>
</div>