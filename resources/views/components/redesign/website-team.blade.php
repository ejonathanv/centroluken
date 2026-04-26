<section class="bg-secondary py-10 md:py-16">
    <div class="container">
        <div class="w-full md:w-7/12 mx-auto text-center">
            <h2 class="text-center text-white text-lg lg:text-3xl leading-relaxed wow animate__animated animate__fadeInUp mb-4">
                {{ __('2026/home.team.title') }}
            </h2>
            <h3 class="font-medium text-center text-white text-base lg:text-xl leading-relaxed wow animate__animated animate__fadeInUp">
                {{ __('2026/home.team.description') }}
            </h3>

            <div>
                <a href="{{ route('redesign.team') }}" 
                    class="inline-block text-center text-white border-2 border-white py-4 px-10 mt-10 hover:bg-white hover:text-secondary transition-colors duration-300 wow animate__animated animate__fadeInDown" data-wow-delay="0.4s">
                    {{ __('2026/home.team.cta') }}
                </a>
            </div>
        </div>
    </div>
</section>