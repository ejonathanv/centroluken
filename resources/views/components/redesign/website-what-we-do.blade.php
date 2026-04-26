<section class="py-10 md:py-20 bg-white">
    <div class="container">
        <div class="w-full md:w-9/12 mx-auto text-center mb-8 md:mb-16">
            <h2 class="text-primary text-center mb-10 text-xl md:text-3xl mb-6 wow animate__animated animate__fadeInDown">
                {{ __('2026/home.what_we_do.title') }}
            </h2>
            <p class="text-sm md:text-lg font-medium">{{ __('2026/home.what_we_do.description') }}</p>
        </div>
    </div>
    <div class="container flex flex-col md:flex-row items-stretch space-x-0 md:space-x-10 space-y-4 md:space-y-0">
        <div class="w-full md:w-1/3 border-2 border-secondary px-8 py-16 text-center flex flex-col items-center wow animate__animated animate__flipInX hover:bg-gray-50 transition-colors duration-300 animate__slow">
            <i class="fa-solid fa-atom text-gray-300 text-5xl mb-6"></i>
            <h3 class="mb-6 text-secondary text-xl">{{ __('2026/home.what_we_do.science.title') }}</h3>
            <p class="text-sm">{{ __('2026/home.what_we_do.science.description') }}</p>
        </div>
        <div class="w-full md:w-1/3 border-2 border-secondary px-8 py-16 text-center flex flex-col items-center wow animate__animated animate__flipInX hover:bg-gray-50 transition-colors duration-300 animate__slow" data-wow-delay="0.2s">
            <i class="fa-solid fa-users text-gray-300 text-5xl mb-6"></i>
            <h3 class="mb-6 text-secondary text-xl">{{ __('2026/home.what_we_do.experience.title') }}</h3>
            <p class="text-sm">{{ __('2026/home.what_we_do.experience.description') }}</p>
        </div>
        <div class="w-full md:w-1/3 border-2 border-secondary px-8 py-16 text-center flex flex-col items-center wow animate__animated animate__flipInX hover:bg-gray-50 transition-colors duration-300 animate__slow" data-wow-delay="0.4s">
            <i class="fa-solid fa-bullhorn text-gray-300 text-5xl mb-6"></i>
            <h3 class="mb-6 text-secondary text-xl">{{ __('2026/home.what_we_do.agency.title') }}</h3>
            <p class="text-sm">{{ __('2026/home.what_we_do.agency.description') }}</p>
        </div>
    </div>
</section>