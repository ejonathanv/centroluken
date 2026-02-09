<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-6/12 mx-auto">

                <a href="{{ route('articles.index') }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado de articulos
                </a>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>
                        Editar articulo
                    </h4>
                </div>

                <form action="{{ route('articles.update', $article) }}" method="POST" class="mt-7" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>
                            Portada
                        </label>
                        <div class="mt-4">
                            <input type="file" name="cover">
                        </div>
                    </div>

                    @if($article->cover)
                    <div class="mb-7">
                        <img src="{{ asset($article->cover) }}" class="w-64 mt-4">
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="">
                            Titulo del articulo
                        </label>
                        <input type="text" class="form-control" name="title" value="{{ old('title', $article->title) }}">
                        @error('title')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Título en inglés
                        </label>
                        <input type="text" class="form-control" name="title_en" value="{{ old('title_en', $article->title_en) }}">
                        @error('title_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Resumen
                        </label>
                        <textarea name="excerpt" class="form-control" rows="3">{{ old('excerpt', $article->excerpt) }}</textarea>
                        @error('excerpt')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Resumen en inglés
                        </label>
                        <textarea name="excerpt_en" class="form-control" rows="3">{{ old('excerpt_en', $article->excerpt_en) }}</textarea>
                        @error('excerpt_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Contenido
                        </label>
                        <input type="hidden" name="body" id="postEditor" value="{{ $article->body }}">
                        <div id="editor">
                            {!! $article->body !!}
                        </div>
                        
                        @error('body')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Contenido en inglés
                        </label>
                        <input type="hidden" name="body_en" id="postEditorEn" value="{{ $article->body_en }}">
                        <div id="editor_en">
                            {!! $article->body_en !!}
                        </div>
                        @error('body_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Categoría
                        </label>
                        <select name="category_id" class="form-control">
                            <option value="">Seleccione una categoría</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Estado
                        </label>
                        <select name="published" class="form-control">
                            <option value="1" {{ old('status', $article->published ? '' : 'selected') }}>Borrador</option>
                            <option value="2" {{ old('status', $article->published ? 'selected' : '') }}>Publicado</option>
                        </select>
                        @error('status')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Fecha de publicación
                        </label>
                        <input type="date" name="published_at" class="form-control" value="{{ old('published_at', $article->published_at->format('Y-m-d')) }}">
                        @error('published_at')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block" type="submit">
                        <i class="fas fa-save mr-2"></i>
                        Actualizar articulo
                    </button>
                </form>

                <hr class="my-7">

                <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar este articulo?')">

                    @csrf

                    @method('DELETE')

                    <p class="text-red-500 text-xs mt-5 mb-4">
                        Al eliminar este articulo, se eliminará de forma permanente y no se podrá recuperar.
                    </p>

                    <button class="btn btn-danger btn-block text-red-400" type="submit">
                        <i class="fas fa-trash mr-2"></i>
                        Eliminar articulo
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof ClassicEditor === 'undefined') return;

            var form = document.querySelector('form');
            Promise.all([
                ClassicEditor.create(document.querySelector('#editor'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                }),
                ClassicEditor.create(document.querySelector('#editor_en'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                })
            ]).then(function(editors) {
                window.articleEditor = editors[0];
                window.articleEditorEn = editors[1];
                form.addEventListener('submit', function() {
                    document.getElementById('postEditor').value = window.articleEditor.getData();
                    document.getElementById('postEditorEn').value = window.articleEditorEn.getData();
                });
            }).catch(function(err) {
                console.error(err);
            });
        });
    </script>
</x-redesign.website-app-layout>