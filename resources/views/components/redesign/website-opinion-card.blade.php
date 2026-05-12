@props(['opinion'])

@php
    $isEnglish = app()->getLocale() === 'en';
    $titulo = $isEnglish && $opinion->title_en ? $opinion->title_en : $opinion->title;
@endphp

<div class="w-full max-w-xs sm:w-1/2 lg:w-1/3 flex flex-col items-center justify-center space-y-8 md:pb-10">
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

