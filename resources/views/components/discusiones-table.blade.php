<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Fecha</th>
            <th>PDF</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($discusiones as $discusion)
        <tr>
            <td class="flex items-center space-x-2">
                @if($discusion->foto_portada)
                <img src="{{ asset($discusion->foto_portada) }}" alt="" class="w-16 h-16 object-cover rounded">
                @endif
                <a href="{{ route('discusiones.edit', $discusion) }}" class="underline">
                    {{ $discusion->titulo }}
                </a>
            </td>
            <td>{{ $discusion->fecha->format('Y-m-d') }}</td>
            <td>
                @if($discusion->pdf_path)
                <span class="badge badge-success">Sí</span>
                @else
                <span class="badge badge-secondary">No</span>
                @endif
            </td>
            <td class="space-x-2">
                <a href="{{ route('discusiones.edit', $discusion) }}" class="text-secondary underline">Editar</a>
                <a href="{{ route('discusiones.especificaciones.index', $discusion) }}" class="text-secondary underline">Especificaciones</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" class="text-gray-500">No hay discusiones creadas.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
