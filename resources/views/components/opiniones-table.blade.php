<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Slug</th>
            <th>Home</th>
            <th>Posición</th>
            <th>URL</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($opiniones as $opinion)
        <tr>
            <td class="flex items-center space-x-2">
                @if($opinion->cover)
                <img src="{{ asset($opinion->cover) }}" alt="" class="w-16 h-16 object-cover rounded">
                @endif
                <a href="{{ route('opinions.edit', $opinion) }}" class="underline">
                    {{ $opinion->title }}
                </a>
            </td>
            <td class="text-sm text-gray-600">{{ $opinion->slug }}</td>
            <td>
                @if($opinion->on_homepage)
                <span class="badge badge-success">Sí</span>
                @else
                <span class="badge badge-secondary">No</span>
                @endif
            </td>
            <td class="text-sm text-gray-600">
                @if($opinion->on_homepage && in_array($opinion->position, [1, 2, 3]))
                {{ $opinion->position }}
                @else
                —
                @endif
            </td>
            <td>
                @if($opinion->url)
                <a href="{{ $opinion->url }}" target="_blank" rel="noopener noreferrer" class="text-secondary underline text-sm">Enlace</a>
                @else
                <span class="badge badge-secondary">—</span>
                @endif
            </td>
            <td>
                <a href="{{ route('opinions.edit', $opinion) }}" class="text-secondary underline">Editar</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-gray-500">No hay opiniones creadas.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
