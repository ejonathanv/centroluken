<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="flex items-center justify-between border-b border-gray-200 pb-5">
                <div>
                    <a href="{{ route('discusiones.edit', $discusion) }}" class="text-sm mb-2 inline-block">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Volver a la discusión
                    </a>
                    <h4 class="mt-2">Especificaciones: {{ $discusion->titulo }}</h4>
                </div>
                <a href="{{ route('discusiones.especificaciones.create', $discusion) }}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Nueva especificación
                </a>
            </div>

            @if(session('status'))
            <p class="text-secondary text-sm mt-4">{{ session('status') }}</p>
            @endif

            <div class="table-responsive mt-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Título</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($especificaciones as $espec)
                        <tr>
                            <td>{{ $espec->orden }}</td>
                            <td>{{ $espec->titulo }}</td>
                            <td class="space-x-2">
                                <a href="{{ route('discusiones.especificaciones.edit', [$discusion, $espec]) }}" class="text-secondary underline">Editar</a>
                                <form action="{{ route('discusiones.especificaciones.destroy', [$discusion, $espec]) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar esta especificación?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 underline text-sm bg-transparent border-0 cursor-pointer p-0">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-gray-500">No hay especificaciones. Crea una con el botón de arriba.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>
</x-redesign.website-app-layout>
