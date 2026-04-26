<x-redesign.website-layout>
    {{-- Sección 1: portada, título, fecha, descripción --}}
    <section class="py-20 bg-gray-200">
        <div class="container flex flex-col lg:flex-row lg:items-center lg:space-x-16 space-y-10 lg:space-y-0">
            <div class="w-full lg:w-1/2">
                @if($discusion->foto_portada)
                <img src="{{ asset($discusion->foto_portada) }}" alt="" class="w-full h-auto object-cover rounded shadow-sm">
                @endif
            </div>
            <div class="w-full lg:w-1/2">
                <div class="flex flex-col space-y-3 mb-10">
                    <p class="text-primary text-center text-3xl font-semibold">{{ __('2026/discussion.title') }}</p>
                    <h1 class="text-center text-2xl lg:text-3xl font-medium text-gray-900">{{ $discusion->titulo }}</h1>
                    <p class="text-center text-lg text-gray-600">{{ $discusion->fecha->format('Y-m-d') }}</p>
                </div>
                <div class="discusion-descripcion prose prose-lg max-w-none text-gray-800">
                    {!! $discusion->descripcion !!}
                </div>

                @if($discusion->pdf_path && ! $discusion->mostrar_solo_pdf)
                <div class="mt-8 flex justify-center lg:justify-start">
                    <a href="{{ asset($discusion->pdf_path) }}" download
                        class="inline-flex items-center border-2 border-primary py-3 px-6 text-primary font-semibold text-sm hover:text-secondary hover:border-secondary transition-colors">
                        {{ __('2026/discussion.download_pdf') }}
                    </a>
                </div>
                @endif
            </div>
        </div>
    </section>

    @if($discusion->mostrar_solo_pdf && $discusion->pdf_path)
    <section class="py-8 bg-white">
        <div class="container">
            <iframe src="{{ asset($discusion->pdf_path) }}" class="w-full min-h-[80vh] border-0 rounded" title="{{ __('2026/discussion.pdf_title') }}"></iframe>
        </div>
    </section>
    @else
    {{-- Sección 2: resumen --}}
    @if($discusion->resumen)
    <section class="py-16 lg:py-20 bg-primary text-white">
        <div class="container max-w-4xl mx-auto">
            <div class="discusion-resumen prose prose-invert prose-lg max-w-none text-center lg:text-left">
                {!! $discusion->resumen !!}
            </div>
        </div>
    </section>
    @endif

    {{-- Sección 3: especificaciones --}}
    @if($discusion->especificaciones->isNotEmpty())
    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($discusion->especificaciones as $espec)
                <div class="bg-white p-8 rounded shadow-sm border border-gray-100">
                    <h3 class="flex items-start space-x-3 text-lg font-semibold text-gray-900 mb-4">
                        <span class="w-3 h-3 bg-primary shrink-0 mt-1.5" aria-hidden="true"></span>
                        <span>{{ $espec->titulo }}</span>
                    </h3>
                    <div class="discusion-espec prose max-w-none text-gray-700 pl-6">
                        {!! $espec->descripcion !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @endif

    <x-redesign.website-materials />
    <x-redesign.website-strategic-partnerships />
</x-redesign.website-layout>
