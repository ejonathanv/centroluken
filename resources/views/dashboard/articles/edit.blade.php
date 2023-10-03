<x-app-layout>
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

                <form action="{{ route('articles.update', $article) }}" method="POST" class="mt-7">

                    @csrf

                    <div class="form-group">
                        <label>
                            Portada
                        </label>
                        <div class="mt-4">
                            <input type="file" name="cover">
                        </div>
                    </div>

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
                            Resumen
                        </label>
                        <textarea name="excerpt" class="form-control" rows="3">{{ old('excerpt', $article->excerpt) }}</textarea>
                        @error('excerpt')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Contenido
                        </label>
                        <textarea name="body" class="form-control" rows="10">{{ old('body', $article->body) }}</textarea>
                        @error('body')
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
                    </div>

                    <div class="form-group">
                        <label for="">
                            Estado
                        </label>
                        <select name="status" class="form-control">
                            <option value="1" {{ old('status', $article->status) == 1 ? 'selected' : '' }}>Borrador</option>
                            <option value="2" {{ old('status', $article->status) == 2 ? 'selected' : '' }}>Publicado</option>
                        </select>
                        @error('status')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block" type="submit">
                        <i class="fas fa-save mr-2"></i>
                        Actualizar articulo
                    </button>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>