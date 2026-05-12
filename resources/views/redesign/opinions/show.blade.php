<x-redesign.website-layout>

    @php
        $isEnglish = app()->getLocale() === 'en';
        $titulo = $isEnglish && $opinion->title_en ? $opinion->title_en : $opinion->title;
        $cuerpo = $isEnglish && $opinion->body_en ? $opinion->body_en : $opinion->body;
    @endphp

    <section class="py-20 bg-gray-200">
        <div class="container flex flex-col lg:flex-row lg:items-center lg:space-x-16 space-y-10 lg:space-y-0">
            <div class="w-full lg:w-1/2">
                @if($opinion->cover)
                <img src="{{ asset($opinion->cover) }}" alt="" class="w-full h-auto object-cover rounded shadow-sm">
                @else
                <div class="w-full aspect-video rounded shadow-sm bg-gray-300" aria-hidden="true"></div>
                @endif
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex flex-col space-y-3 mb-10">
                    <p class="text-primary text-left text-3xl font-semibold">{{ __('2026/opinion.title') }}</p>
                    <h1 class="text-left text-2xl lg:text-3xl font-medium text-gray-900">{{ $titulo }}</h1>
                </div>
                <div class="opinion-body prose prose-lg max-w-none text-gray-800 text-left">
                    {!! $cuerpo !!}
                </div>

                @if($opinion->url)
                <div class="mt-8 flex justify-center lg:justify-start">
                    <a href="{{ $opinion->url }}" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center border-2 border-primary py-3 px-6 text-primary font-semibold text-sm hover:text-secondary hover:border-secondary transition-colors">
                        {{ __('2026/opinion.external_link') }}
                    </a>
                </div>
                @endif
            </div>
        </div>

        <div class="container flex justify-center mt-24">
            <a href="{{ route('redesign.opinions') }}" class="inline-block border-2 border-primary py-3 px-6 text-primary font-semibold text-sm hover:text-secondary">
                {{ __('2026/opinion.list.see_others') }}
            </a>
        </div>
    </section>

    <x-redesign.website-materials />
    <x-redesign.website-strategic-partnerships />
</x-redesign.website-layout>
