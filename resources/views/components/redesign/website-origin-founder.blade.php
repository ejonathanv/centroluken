<section class="bg-gray-200 py-10 md:py-20">
    <div class="container">
        <div class="flex flex-col md:flex-row items-center space-y-10 md:space-y-0 space-x-0 md:space-x-24">
            <div class="w-full md:w-1/2 flex flex-col space-y-5">
                <p class="text-lg">
                    {{ __('2026/origin.founder.p1') }}
                </p>

                <p class="text-lg text-primary">
                    {{ __('2026/origin.founder.p2') }}
                </p>
            </div>
            <div class="w-full md:w-1/2 flex justify-end relative">
                <div class="hidden md:block w-1/2 h-[450px] object-cover absolute -left-10 bottom-0 top-0 bg-primary"></div>
               
                <img src="{{ asset('redesign/img/origin/gaston-luken-aguilar_2.jpg') }}" 
                    alt="{{ __('2026/origin.founder.image_alt') }}" 
                    class="w-auto h-[450px] object-cover relative z-10 wow animate__animated animate__fadeInLeft">
            </div>
        </div>
    </div>
</section>