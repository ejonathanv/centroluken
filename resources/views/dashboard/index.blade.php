<x-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between border-b border-gray-200 pb-5">
                <h4>
                    Hola, estos son los articulos publicados en nuestro blog.
                </h4>
                <a href="{{ route('articles.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Nuevo articulo
                </a>
            </div>

            <x-articles-table />

        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>
</x-app-layout>