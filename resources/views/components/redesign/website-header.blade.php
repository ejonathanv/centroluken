<header class="bg-white shadow relative lg:fixed top-0 left-0 right-0" style="z-index: 101;">
    <!-- Curvas -->
    <div class="bg-primary w-[35%] md:w-[40%] lg:w-[50%] h-full absolute top-0 right-0 z-1">
        <img src="{{ asset('/redesign/img/header-curvas.png') }}" 
            alt="" 
            class="absolute w-auto left-[-70px] lg:left-[-270px] h-full w-auto bottom-0">
    </div>

    <!-- Contenedor -->
    <div class="container" x-data="{
        mobileMenu: false,
        toggleMobileMenu() {
            this.mobileMenu = !this.mobileMenu;

            if (this.mobileMenu) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = 'auto';
            }
        }
    }">
        <div class="flex items-center justify-between relative">
            <!-- Logo -->
            <div class="w-2/3 lg:w-1/3">
                <a href="{{ route('redesign.home') }}">
                    <img src="{{ asset('img/centro-luken-logo.svg') }}" 
                        alt="{{ __('2026/header.logo_alt') }}"
                        class="h-12 w-auto">
                </a>
            </div>

            <!-- Menu de escritorio -->
            <nav class="lg:flex items-center justify-end redesign-nav bg-primary py-8 w-1/3 lg:w-2/3 relative z-2" x-data="{
                changeLang: false
            }">
                @if(!$admin)
                    <ul class="hidden lg:flex items-center space-x-10">
                        <!-- Inicio -->
                        <li>
                            <a href="{{ route('redesign.home') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.nav.home') }}
                            </a>
                        </li>
                        <!-- Filosofia -->
                        <li>
                            <a href="{{ route('redesign.philosophy') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.nav.philosophy') }}
                            </a>
                        </li>
                        <!-- Origen -->
                        <li>
                            <a href="{{ route('redesign.origin') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.nav.origin') }}
                            </a>
                        </li>
                        <!-- Equipo -->
                        <li>
                            <a href="{{ route('redesign.team') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.nav.team') }}
                            </a>
                        </li>
                        <!-- Materiales -->
                        <li class="submenu">
                            <span href="{{ route('redesign.materials') }}" class="text-white font-semibold text-sm cursor-pointer flex items-center space-x-2">
                                <span>{{ __('2026/header.nav.materials') }}</span>
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                            <div class="submenu-content">
                                <ul>
                                    <li>
                                        <a href="{{ route('redesign.studies') }}">
                                            {{ __('2026/header.nav.projects') }}
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="{{ route('redesign.resources') }}">
                                            {{ __('2026/header.nav.resources') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Alianzas -->
                        {{--
                        <li>
                            <a href="{{ route('redesign.partnerships') }}" class="text-white font-semibold text-sm hover:text-secondary">
                                Alianzas
                            </a>
                        </li>
                        --}}
                        <!-- Contacto -->
                        <li>
                            <a href="{{ route('redesign.contact') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.nav.contact') }}
                            </a>
                        </li>
                        <!-- Seleccionar idioma -->
                        <li>
                            <a href="#" class="text-white opacity-50 font-semibold text-sm hover:opacity-100" @click.prevent="changeLang = !changeLang">
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                    </ul>
                @endif

                @if($admin)
                    <ul class="flex items-center justify-end space-x-7">
                        <li>
                            <a href="{{ route('articles.index') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.admin.articles') }}
                            </a>
                        </li>
                        <li>
                            <div class="relative inline-block" x-data="{ open: false }">
                                <button x-on:click="open = !open" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                    {{ __('2026/header.admin.topics') }}
                                    <i class="fas fa-chevron-down ml-1 text-xs"></i>
                                </button>
                                <div x-show="open" x-on:click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 text-gray-700">
                                    <a href="{{ route('topics.index') }}?type=article" class="block px-4 py-2 hover:bg-gray-100">
                                        {{ __('2026/header.admin.topics_articles') }}
                                    </a>
                                    <a href="{{ route('topics.index') }}?type=pdf" class="block px-4 py-2 hover:bg-gray-100">
                                        {{ __('2026/header.admin.topics_pdfs') }}
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('discusiones.index') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.admin.discussions') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('redesign.home') }}" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                {{ __('2026/header.admin.back_to_site') }}
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="inline-block">
                                @csrf
                                <button type="submit" class="text-white opacity-50 font-semibold text-sm hover:opacity-100">
                                    {{ __('2026/header.admin.logout') }}
                                </button>
                            </form>
                        </li>
                    </ul>
                @endif

                <ul class="flex lg:hidden items-center justify-end space-x-4">
                    <li>
                        <a href="#" class="text-white opacity-50 font-semibold text-sm hover:opacity-100 relative"
                            style="z-index: 1001;"
                            @click.prevent="toggleMobileMenu()">
                            <i x-show="!mobileMenu" class="fa-solid fa-bars text-2xl md:text-3xl"></i>
                            <i x-show="mobileMenu" class="fa-solid fa-xmark text-2xl md:text-3xl"></i>
                        </a>
                    </li>
                </ul>

                <template x-if="changeLang">
                    <div class="fixed bg-gray-900 bg-opacity-50 w-full top-0 left-0 right-0 bottom-0 flex items-center justify-center z-10">
                        <div class="container">
                            <div class="bg-white bg-opacity-90 rounded-lg shadow-lg p-6 w-5/12 mx-auto">
                                <h3 class="text-center mb-16">{{ __('2026/header.modal.title') }}</h3>
                                <div class="flex items-center justify-center space-x-7">
                                    <a href="{{ route('set-locale', 'es') }}" class="flex items-center space-x-2 text-lg font-bold opacity-50 hover:opacity-100 text-primary">
                                        <img src="{{ asset('img/mexico_flag.png') }}" alt="{{ __('2026/header.modal.flag_mx_alt') }}" class="w-7 h-auto">
                                        <span>Español</span>
                                    </a>
                                    <a href="{{ route('set-locale', 'en') }}" class="flex items-center space-x-2 text-lg font-bold opacity-50 hover:opacity-100 text-primary">
                                        <img src="{{ asset('img/usa_flag.png') }}" alt="{{ __('2026/header.modal.flag_us_alt') }}" class="w-7 h-auto">
                                        <span>English</span>
                                    </a>
                                </div>
                                <div class="flex items-center justify-center mt-10">
                                    <a href="#" class="text-xs font-bold text-gray-500 flex items-center space-x-2" @click.prevent="changeLang = false">
                                        <i class="fa fa-times fa-sm"></i>
                                        <span>{{ __('2026/header.modal.close') }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </nav>
        </div>

        <!-- Menu Mobile - Se activa con alpine -->
        <div class="mobile-menu" :class="{ 'active': mobileMenu }">
            <img src="{{ asset('img/centro-luken-logo-oscuro.svg') }}" 
                alt="{{ __('2026/header.logo_alt') }}"
                class="h-12 w-auto mb-12">

            <nav class="mb-7">
                <ul class="flex flex-col space-y-4">
                    <li class="border-b-2 border-white/20 py-2">
                        <a href="{{ route('redesign.home') }}" class="text-white font-semibold text-sm hover:text-secondary">
                            {{ __('2026/header.nav.home') }}
                        </a>
                    </li>
                    <li class="border-b-2 border-white/20 py-2">
                        <a href="{{ route('redesign.philosophy') }}" class="text-white font-semibold text-sm hover:text-secondary">
                            {{ __('2026/header.nav.philosophy') }}
                        </a>
                    </li>
                    <li class="border-b-2 border-white/20 py-2">
                        <a href="{{ route('redesign.origin') }}" class="text-white font-semibold text-sm hover:text-secondary">
                            {{ __('2026/header.nav.origin') }}
                        </a>
                    </li>
                    <li class="border-b-2 border-white/20 py-2">
                        <a href="{{ route('redesign.team') }}" class="text-white font-semibold text-sm hover:text-secondary">
                            {{ __('2026/header.nav.team') }}
                        </a>
                    </li>
                    <li class="border-b border-white/20 py-2">
                        <span class="text-white font-semibold text-sm hover:text-secondary block mb-6">
                            <span>{{ __('2026/header.nav.materials') }}</span>
                        </span>
                        <div>
                            <ul class="flex flex-col space-y-4">
                                <li>
                                    <a href="{{ route('redesign.studies') }}" class="text-secondary font-semibold text-sm">
                                        {{ __('2026/header.nav.projects') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('redesign.resources') }}" class="text-secondary font-semibold text-sm">
                                        {{ __('2026/header.nav.resources') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{--
                    <li class="border-b-2 border-white/20 py-2">
                        <a href="{{ route('redesign.partnerships') }}" class="text-white font-semibold text-sm hover:text-secondary">
                            Alianzas
                        </a>
                    </li>
                    --}}
                </ul>
            </nav>

            @if(!$admin)
                <div class="mb-8 border-t border-white/15 pt-6">
                    <p class="text-white/40 text-[11px] font-semibold uppercase tracking-wider mb-3">
                        {{ __('2026/header.mobile.language') }}
                    </p>
                    <div class="inline-flex rounded-lg border border-white/20 p-0.5 bg-black/10" role="group" aria-label="{{ __('2026/header.mobile.language') }}">
                        <a href="{{ route('set-locale', 'es') }}"
                            title="{{ __('2026/header.modal.spanish') }}"
                            class="min-w-[3.25rem] px-3 py-2 rounded-md text-xs font-semibold text-center transition
                                {{ app()->getLocale() === 'es' ? 'bg-white/20 text-white shadow-sm' : 'text-white/45 hover:text-white' }}">
                            Español
                        </a>
                        <a href="{{ route('set-locale', 'en') }}"
                            title="{{ __('2026/header.modal.english') }}"
                            class="min-w-[3.25rem] px-3 py-2 rounded-md text-xs font-semibold text-center transition
                                {{ app()->getLocale() === 'en' ? 'bg-white/20 text-white shadow-sm' : 'text-white/45 hover:text-white' }}">
                            English
                        </a>
                    </div>
                </div>
            @endif

            <p class="text-white/50 text-xs font-semibold">
                © {{ __('2026/header.mobile.copyright', ['year' => date('Y'), 'app' => config('app.name')]) }}
            </p>
        </div>
    </div>
</header>
