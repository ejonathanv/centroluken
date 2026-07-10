<section class="py-0 md:py-10 lg:py-20 !md:pt-6 bg-white">
    @if ($isHome)
    <div class="container">
        <div class="w-full lg:w-9/12 mx-auto text-center mb-8 lg:mb-32">
            <h2 class="text-primary text-center mb-10 text-xl lg:text-3xl mb-6 wow animate__animated animate__fadeInDown">
                {{ __('2026/home.strategies.title') }}
            </h2>
        </div>
    </div>
    @endif

    <div class="flex flex-col space-y-10 lg:space-y-24">
        <!-- Estrategia #1 -->
        <div>
            <x-redesign.website-strategies-item image="{{ asset('redesign/img/home/proyectos_diagnosticoygestion.jpg') }}">
                <x-slot:title>
                    {{ __('2026/home.strategies.one.title') }}
                </x-slot:title>
                <x-slot:description>
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.one.p1') }}
                    </p>
                    <p class="text-sm lg:text-lg">
                        {{ __('2026/home.strategies.one.p2') }}
                    </p>
                </x-slot:description>
            </x-redesign.website-strategies-item>
        </div>

        <!-- Estrategia #2 -->
        <div>
            <x-redesign.website-strategies-item-reverse image="{{ asset('redesign/img/home/estrategia-2.jpg') }}">
                <x-slot:title>
                    {{ __('2026/home.strategies.two.title') }}
                </x-slot:title>
                <x-slot:description>
                    @if (Lang::has('2026/home.strategies.two.intro') && filled(__('2026/home.strategies.two.intro')))
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.two.intro') }}
                    </p>
                    @endif
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.two.p1') }}
                    </p>
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.two.p2') }}
                    </p>
                    <p class="text-sm lg:text-lg">
                        {{ __('2026/home.strategies.two.p3') }}
                    </p>
                </x-slot:description>
            </x-redesign.website-strategies-item>
        </div>

        <!-- Estrategia #3 -->
        <div>
            <x-redesign.website-strategies-item image="{{ asset('redesign/img/home/estrategia-3.jpg') }}">
                <x-slot:title>
                    {{ __('2026/home.strategies.three.title') }}
                </x-slot:title>
                <x-slot:description>
                    @if (Lang::has('2026/home.strategies.three.intro') && filled(__('2026/home.strategies.three.intro')))
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.three.intro') }}
                    </p>
                    @endif
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.three.p1') }}
                    </p>
                    <p class="text-sm lg:text-lg mb-4">
                        {{ __('2026/home.strategies.three.p2') }}
                    </p>
                    <p class="text-sm lg:text-lg">
                        {{ __('2026/home.strategies.three.p3') }}
                    </p>
                </x-slot:description>
            </x-redesign.website-strategies-item>
        </div>
    </div>
</section>