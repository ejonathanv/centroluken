<section class="py-10 lg:py-20 bg-white">
    @php
        $isEnglish = app()->getLocale() === 'en';
        $discusionTitulo = $discusionDestacada
            ? (($isEnglish && $discusionDestacada->titulo_en) ? $discusionDestacada->titulo_en : $discusionDestacada->titulo)
            : null;
    @endphp

    <div class="container">
        <div class="w-full md:w-9/12 mx-auto">
            <h2 class="text-primary text-center mb-10 text-xl lg:text-3xl mb-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                {{ __('2026/home.materials.title') }}
            </h2>
            
            <p class="text-center text-sm lg:text-lg font-medium mb-10">
                {{ __('2026/home.materials.description') }}
            </p>

            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 items-stretch bg-primary wow animate__animated animate__flipInX animate__slow">
                <div class="w-full md:w-7/12 p-6 md:p-12 text-center flex flex-col items-center justify-between space-y-10">
                    <a href="https://centroluken.org/articulo-pdf/42">
                        <h3 class="text-white text-lg lg:text-2xl font-medium underline hover:text-secondary">
                            {{ __('2026/home.materials.featured.title') }}
                        </h3>
                    </a>
                    <p class="text-white text-sm lg:text-base">
                        {{ __('2026/home.materials.featured.description') }}
                    </p>
                </div>
                <div class="w-full md:w-5/12 p-6 md:p-12 relative border-t-2 border-white md:border-t-0">
                    <div class="hidden md:block absolute top-0 -left-[10px] bottom-0 w-[40px] bg-white bg-opacity-50"></div>
                    <div class="flex flex-col items-center justify-between text-center h-full">
                        <h3 class="text-white text-lg lg:text-2xl font-medium mb-4">
                            {{ __('2026/home.materials.discussion.title') }}
                        </h3>
                        @if($discusionDestacada)
                            <a href="{{ route('redesign.discusion.show', $discusionDestacada) }}">
                                <h3 class="text-white text-lg lg:text-2xl font-medium mb-4 underline hover:text-secondary">
                                    {{ $discusionTitulo }}
                                </h3>
                            </a>
                            <h4 class="text-secondary text-sm lg:text-base font-bold">
                                {{ $discusionDestacada->fecha->format('Y-m-d') }}
                            </h4>
                            <div class="mt-4">
                                <a href="{{ route('redesign.discusion.show', $discusionDestacada) }}" class="text-white text-sm lg:text-base underline hover:text-secondary">
                                    {{ __('2026/home.materials.discussion.read_more') }}
                                </a>
                            </div>
                        @else
                        <p class="text-white text-sm lg:text-base opacity-80">{{ __('2026/home.materials.discussion.coming_soon') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            @if($discusionDestacada)
            <div class="flex justify-center mt-10">
                <a href="{{ route('redesign.discusiones') }}" class="block border-2 border-primary py-3 px-6 text-primary font-semibold text-sm hover:text-secondary">
                    {{ __('2026/discussion.list.see_others') }}
                </a>
            </div>
            @endif
        </div>
    </div>
</section>