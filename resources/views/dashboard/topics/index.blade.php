<x-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between border-b border-gray-200 pb-5">
                <h4>
                    Temas de interés
                </h4>
                @if(request()->get('type') == 'article')
                <a href="{{ route('topics.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo artículo
                </a>
                @else
                <a href="{{ route('create-pdf-topic') }}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo PDF
                </a>
                @endif
            </div>

            <x-topics-table />

        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>
</x-app-layout>