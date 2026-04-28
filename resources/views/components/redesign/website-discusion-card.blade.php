@props(['discusion'])

@php
    $isEnglish = app()->getLocale() === 'en';
    $titulo = $isEnglish && $discusion->titulo_en ? $discusion->titulo_en : $discusion->titulo;
    $descripcionRaw = $isEnglish && $discusion->descripcion_en ? $discusion->descripcion_en : $discusion->descripcion;
    $extracto = \Illuminate\Support\Str::limit(strip_tags((string) $descripcionRaw), 150);
@endphp

<a href="{{ route('redesign.discusion.show', $discusion) }}" class="group block h-full">
    <div class="flex flex-col h-full border-2 border-secondary p-4 transition-colors hover:border-primary">
        <div class="aspect-video w-full overflow-hidden bg-gray-100 mb-4 shrink-0">
            @if($discusion->foto_portada)
                <img src="{{ asset($discusion->foto_portada) }}" alt="" class="h-full w-full object-cover transition-transform group-hover:scale-[1.02]">
            @endif
        </div>
        <time datetime="{{ $discusion->fecha->format('Y-m-d') }}" class="text-xs text-gray-500 uppercase tracking-wide mb-2">
            {{ $discusion->fecha->format('Y-m-d') }}
        </time>
        <h3 class="text-lg font-medium text-secondary mb-3 group-hover:text-primary transition-colors">
            {{ $titulo }}
        </h3>
        @if($extracto !== '')
            <p class="text-sm text-gray-600 line-clamp-3 grow">
                {{ $extracto }}
            </p>
        @endif
        <span class="mt-4 text-sm font-bold text-secondary group-hover:text-primary transition-colors">
            {{ __('2026/discussion.list.read_more') }}
        </span>
    </div>
</a>
