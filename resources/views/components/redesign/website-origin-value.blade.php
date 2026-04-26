<section class="py-10 md:py-20 bg-white">
    <div class="container">
        <div class="flex flex-col md:flex-row items-stretch space-x-0 md:space-x-10 space-y-10 md:space-y-0">
            @php
            $img = asset('redesign/img/origin/valoranadido.jpg');
            @endphp
            <div class="h-[250px] md:h-auto w-full md:w-1/2 bg-cover bg-center wow animate__animated animate__fadeInLeft"  
                style="background-image: url('{{ $img }}')">
            </div>
            <div class="w-full md:w-1/2">
                <div class="p-8 border-2 border-secondary flex flex-col space-y-7">
                    <p class="text-lg text-primary">
                        {{ __('2026/origin.value.p1') }}
                    </p>

                    <p class="text-lg text-primary">
                        {{ __('2026/origin.value.p2') }}
                    </p>

                    <h class="text-2xl text-secondary font-medium">
                        {{ __('2026/origin.value.highlight') }}
                        </h3>
                </div>
            </div>
        </div>
    </div>
</section>