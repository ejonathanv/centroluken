@section('title', 'Blog')

<x-guest-layout header="header2">
    <section class="py-10 md:pt-24 md:pb-16">
        <div class="container">
            <a href="{{ route('topicCategory', $topic->category) }}" class="mb-5 text-sm text-secondary">
                <i class="fas fa-arrow-left mr-2"></i>
                Volver al listado de temas de interés
            </a>

            <div class="w-full text-left mt-6">
                <h1 class="text-primary title mb-4 !leading-tight">
                    @if(session()->get('locale') == 'es')
                    {{ $topic->title }}
                    @else
                    {{ $topic->title_en }}
                    @endif
                </h1>

                @if(session()->get('locale') == 'es')
                <p class="text-gray-500 text-sm my-3">
                    {{ $topic->description }}
                    </p>
                @else
                <p class="text-gray-500 text-sm my-3">
                    {{ $topic->description_en }}
                </p>
                @endif

                <h6 class="text-secondary mb-7">
                    {{ $topic->source }} | 
                    {{ $topic->published_at->format('d/m/Y') }}
                </h6>

                <iframe src="{{ asset($topic->pdf_path) }}" class="w-full" style="height: 100vh;" frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-guest-layout>