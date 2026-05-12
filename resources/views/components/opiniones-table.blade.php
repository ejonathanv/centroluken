<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Título</th>
            <th>Slug</th>
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
            <td colspan="4" class="text-gray-500">No hay opiniones creadas.</td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
