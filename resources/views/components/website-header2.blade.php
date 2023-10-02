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
                <a href="{{ route('home') }}" class="opacity-50 @if (request()->routeIs('home')) !opacity-100 @endif">
                    ¿Qué hacemos?
                </a>
                <a href="{{ route('about') }}" class="opacity-50 @if (request()->routeIs('about')) !opacity-100 @endif">
                    ¿Quiénes somos?
                </a>
                <a href="{{ route('blog') }}" class="opacity-50 @if (request()->routeIs('blog')) !opacity-100 @endif">
                    Blog
                </a>

                {{--
                    <!-- Se van a ocultar por el momento -->

                    <a href="{{ route('home') }}" class="opacity-50">
                        Proyectos
                    </a>
                --}}
                <a href="{{ route('contact') }}" class="bg-white text-primary px-5 py-2 rounded-full shadow">
                    Contáctanos
                </a>
            </nav>

            <a href="#" class="absolute top-0 right-0 mt-8 mr-5 md:hidden" @click.prevent="toggleMobileMenu">
                <i class="fas fa-bars text-white text-2xl md:hidden"></i>
            </a>
        </div>
       </div> 
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
            ¿Qué hacemos?
        </a>
        <a href="{{ route('about') }}" class="@if (request()->routeIs('about')) active @endif">
            ¿Quiénes somos?
        </a>
        <a href="{{ route('blog') }}" class="@if (request()->routeIs('about')) active @endif">
            Blog
        </a>
        {{--
            <a href="#">
                Proyectos
            </a>
        --}}
        <a href="{{ route('contact') }}" class="@if (request()->routeIs('contact')) active @endif">
            Contáctanos
        </a>
    </nav>
    <p class="text-xs">
        &copy; {{ date('Y') }} Centro Luken, Derechos Reservados.
    </p>
</div>