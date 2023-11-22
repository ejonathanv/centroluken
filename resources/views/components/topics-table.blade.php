<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Fecha de publicación</th>
            <th>Fuente</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($topics as $topic)
        <tr>
            <td>
                <a href="{{ route('topics.edit', $topic) }}" class="underline">
                {{ $topic->title }}
                </a>
            </td>
            <td>{{ $topic->published_at }}</td>
            <td>
                {{ $topic->source }}
            </td>
            <td>
                {{ $topic->category->name }}
            </td>
            <td>
                <a href="{{ route('topics.edit', $topic) }}" class="text-secondary underline">
                    Editar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>