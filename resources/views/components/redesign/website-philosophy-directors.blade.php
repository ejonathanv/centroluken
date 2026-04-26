<section class="bg-white py-10 lg:py-24">
    <div class="container">
        @php
            $founderOne = asset('redesign/img/philosophy/founder-1.jpg');
            $founderTwo = asset('redesign/img/philosophy/founder-2.jpg');
            $founderThree = asset('redesign/img/philosophy/founder-3.jpg');
            $founderFour = asset('redesign/img/philosophy/founder-4.jpg');
            $founderFive = asset('redesign/img/philosophy/founder-5.jpg');
        @endphp
        <div class="flex items-stretch justify-center flex-col md:flex-row flex-wrap">
            <!-- Carlos A. de la Parra Rentería -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp">
                
                {{--
                    - El link queda deshabilitado por ahora
                    <a href="{{ route('founder', 'carlos-a-de-la-parra') }}" class="cursor-pointer"></a>
                --}}

                <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderOne }}');"></div>
                <h3 class="text-base lg:text-xl font-medium mb-2">{{ __('2026/about.team.partners.one.name') }}</h3>
                <p class="font-bold text-xs">{{ __('2026/philosophy.directors.role') }}</p>
            </div>

            <!-- Héctor I. Peterson Villalobos -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{--
                    - El link queda deshabilitado por ahora
                    <a href="{{ route('founder', 'hector-i-peterson-villalobos') }}" class="cursor-pointer"></a>
                --}}

                <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderTwo }}');"></div>
                <h3 class="text-base lg:text-xl font-medium mb-2">{{ __('2026/about.team.partners.two.name') }}</h3>
                <p class="font-bold text-xs">{{ __('2026/philosophy.directors.role') }}</p>
            </div>

            <!-- Héctor M. Arias Rojo -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                {{--
                    - El link queda deshabilitado por ahora
                    <a href="{{ route('founder', 'hector-m-arias-rojo') }}" class="cursor-pointer"></a>
                --}}

                <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderThree }}');"></div>
                <h3 class="text-base lg:text-xl font-medium mb-2">{{ __('2026/about.team.partners.three.name') }}</h3>
                <p class="font-bold text-xs">{{ __('2026/philosophy.directors.role') }}</p>
            </div>

            <!-- Martín A. Delgado Saldívar -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                {{--
                    - El link queda deshabilitado por ahora
                    <a href="{{ route('founder', 'martin-a-delgado-saldivar') }}" class="cursor-pointer"></a>
                --}}

                <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderFour }}');"></div>
                <h3 class="text-base lg:text-xl font-medium mb-2">{{ __('2026/about.team.partners.four.name') }}</h3>
                <p class="font-bold text-xs">{{ __('2026/philosophy.directors.role') }}</p>
            </div>

            <!-- Roberto Fernando Salmón Castelo (QEPD) -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                {{--
                    - El link queda deshabilitado por ahora
                    <a href="{{ route('founder', 'roberto-fernando-salmon-castelo') }}" class="cursor-pointer"></a>
                --}}

                <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderFive }}');"></div>
                <h3 class="text-base lg:text-xl font-medium mb-2">{{ __('2026/about.team.partners.five.name') }}</h3>
                <p class="font-bold text-xs">{{ __('2026/philosophy.directors.role') }}</p>
            </div>
        </div>
    </div>
</section>