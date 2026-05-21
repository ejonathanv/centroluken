@props(['opinion'])

@php
    $isEnglish = app()->getLocale() === 'en';
    $titulo = $isEnglish && $opinion->title_en ? $opinion->title_en : $opinion->title;
    $cuerpo = $isEnglish && $opinion->body_en ? $opinion->body_en : $opinion->body;
    $autor = $opinion->author ? $opinion->author : $titulo;
    $resumen = \Illuminate\Support\Str::limit(strip_tags($cuerpo), 160);
@endphp

<div class="px-4 mb-7 h-full">
    <div class="flex flex-col space-y-4 p-4 border-2 border-secondary h-full">
        <h3 class="text-lg font-medium text-secondary">
            {{ $titulo }}
        </h3>
        <p class="text-sm text-gray-500">
            {{ $autor }}
        </p>
        @if($opinion->date_published)
        <p class="text-sm text-gray-500">
            {{ $opinion->date_published->format('d/m/Y') }}
        </p>
        @endif
        @if($resumen)
        <p class="text-sm text-gray-500">
            {{ $resumen }}
        </p>
        @endif
        <a href="{{ route('redesign.opinion', $opinion) }}" class="text-sm font-bold text-secondary">
            {{ __('2026/opinion.list.read_more') }}
        </a>
    </div>
</div>
