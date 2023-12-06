<div class="table-responsive">
<table class="table">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Fecha de publicación</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($articles as $article)
        <tr>
            <td class="flex items-center space-x-2">
                <img src="{{ $article->cover }}" alt="" class="w-16 h-16 object-cover rounded">
                <a href="{{ route('articles.edit', $article) }}" class="underline">
                {{ $article->title }}
                </a>
            </td>
            <td>{{ $article->created_at }}</td>
            <td>
                @if($article->published)
                <i class="fas fa-check text-secondary mr-2"></i>
                <span class="badge badge-success">Publicado</span>
                @else
                <i class="fas fa-pencil-alt text-red-500 mr-2"></i>
                <span class="badge badge-danger">Borrador</span>
                @endif
            </td>
            <td>
                <a href="{{ route('articles.edit', $article) }}" class="text-secondary underline">
                    Editar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>