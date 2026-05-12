<section class="py-10 bg-primary">
    <div class="container">
        <h1 class="text-center text-white">{{ __('2026/opinion.title') }}</h1>
    </div>
</section>

<div class="py-32">
    <div class="container flex items-center justify-center flex-col">
        @php
            $listLocaleEn = app()->getLocale() === 'en';
        @endphp
        <div class="flex flex-wrap items-center md:items-start justify-center md:justify-between mb-16 w-full space-y-10 md:space-y-0">
            @foreach($opinions as $opinion)
                @php
                    $titulo = $listLocaleEn && $opinion->title_en ? $opinion->title_en : $opinion->title;
                @endphp
                <div class="w-full max-w-xs sm:w-1/2 lg:w-1/3 flex flex-col items-center justify-center space-y-8">
                    <a href="{{ route('redesign.opinion', $opinion) }}" class="relative inline-block">
                        <div class="w-60 h-60 bg-primary rounded-full absolute right-7" aria-hidden="true"></div>
                        <div class="w-60 h-60 rounded-full relative z-[2] overflow-hidden">
                            @if($opinion->cover)
                                <img src="{{ asset($opinion->cover) }}" alt="" class="h-full w-full object-cover">
                            @endif
                        </div>
                    </a>

                    <h4 class="text-center text-lg font-medium px-2">{{ $titulo }}</h4>
                </div>
            @endforeach
        </div>
        <a href="{{ route('redesign.opinions') }}" class="block border-2 border-primary py-3 px-6 text-primary font-semibold text-sm hover:text-secondary">
            {{ __('2026/opinion.list.see_others') }}
        </a>
    </div>
</div>
