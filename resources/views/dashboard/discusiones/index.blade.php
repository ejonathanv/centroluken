<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between border-b border-gray-200 pb-5">
                <h4>
                    Discusiones
                </h4>
                <a href="{{ route('discusiones.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Nueva discusión
                </a>
            </div>

            <x-discusiones-table />

        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>
</x-redesign.website-app-layout>
