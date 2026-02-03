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
                <a href="{{ route('founder', 'carlos-a-de-la-parra') }}" class="cursor-pointer">
                    <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderOne }}');"></div>
                    <h3 class="text-base lg:text-xl font-medium mb-2">Carlos A. de la Parra Rentería</h3>
                    <p class="font-bold text-xs">Socio fundador</p>
                </a>
            </div>

            <!-- Héctor I. Peterson Villalobos -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <a href="{{ route('founder', 'hector-i-peterson-villalobos') }}" class="cursor-pointer">
                    <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderTwo }}');"></div>
                    <h3 class="text-base lg:text-xl font-medium mb-2">Héctor I. Peterson Villalobos</h3>
                    <p class="font-bold text-xs">Socio fundador</p>
                </a>
            </div>

            <!-- Héctor M. Arias Rojo -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <a href="{{ route('founder', 'hector-m-arias-rojo') }}" class="cursor-pointer">
                    <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderThree }}');"></div>
                    <h3 class="text-base lg:text-xl font-medium mb-2">Héctor M. Arias Rojo</h3>
                    <p class="font-bold text-xs">Socio fundador</p>
                </a>
            </div>

            <!-- Martín A. Delgado Saldívar -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.6s">
                <a href="{{ route('founder', 'martin-a-delgado-saldivar') }}" class="cursor-pointer">
                    <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderFour }}');"></div>
                    <h3 class="text-base lg:text-xl font-medium mb-2">Martín A. Delgado Saldívar</h3>
                    <p class="font-bold text-xs">Socio fundador</p>
                </a>
            </div>

            <!-- Roberto Fernando Salmón Castelo (QEPD) -->
            <div class="w-full md:w-1/3 p-4 lg:p-8 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.8s">
                <a href="{{ route('founder', 'roberto-fernando-salmon-castelo') }}" class="cursor-pointer">
                    <div class="h-[375px] bg-gray-100 mb-6 bg-cover bg-center" style="background-image: url('{{ $founderFive }}');"></div>
                    <h3 class="text-base lg:text-xl font-medium mb-2">Roberto Fernando Salmón Castelo (QEPD)</h3>
                    <p class="font-bold text-xs">Socio fundador</p>
                </a>
            </div>
        </div>
    </div>
</section>