<section class="py-10 md:py-16">
    <div class="container">
        <div class="w-full md:w-10/12 lg:w-8/12 mx-auto text-center mb-24">
            <h1 class="text-primary title mb-10 !leading-tight wow animate__animated animate__fadeInDown">
                {{ __('2026/philosophy.intro.title') }}
            </h1>
            <h3 class="text-primary font-medium leading-relaxed">
                {{ __('2026/philosophy.intro.subtitle') }}
            </h3>
        </div>
    </div>

    <div class="flex flex-col md:flex-row items-stretch space-x-0 md:space-x-10 space-y-10 md:space-y-0 justify-between px-4 md:px-16">
        <div class="w-full md:w-6/12 lg:w-3/12 wow animate__animated animate__fadeInLeft text-center lg:text-left">
            <h3 class="text-xl font-bold mb-4 text-primary">
                {{ __('2026/philosophy.intro.mission_title') }}
            </h3>
            <p class="text-sm lg:text-sm">
                {{ __('2026/philosophy.intro.mission_text') }}
            </p>
        </div>
        <div class="hidden lg:block w-6/12 relative wow animate__animated animate__fadeInUp">
            <img src="{{ asset('redesign/svg/half-curve.svg') }}"
                alt="Misión"
                class="w-full h-auto relative -top-[30px]">
        </div>
        <div class="w-full md:w-6/12 lg:w-3/12 wow animate__animated animate__fadeInRight text-center lg:text-left">
            <h3 class="text-xl font-bold mb-4 text-primary">
                {{ __('2026/philosophy.intro.vision_title') }}
            </h3>
            <p class="text-sm lg:text-sm">
                {{ __('2026/philosophy.intro.vision_text') }}
            </p>
        </div>
    </div>

    <div class="block lg:hidden container mt-10">
        <div class="w-full md:w-5/12 mx-auto">
            <div class="relative wow animate__animated animate__fadeInUp">
                <img src="{{ asset('redesign/svg/half-curve.svg') }}"
                    alt="Misión"
                    class="w-full h-auto">
            </div>
        </div>
    </div>
</section>