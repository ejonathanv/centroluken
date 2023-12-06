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
                        Crear un nuevo articulo
                    </h4>
                </div>

                <form action="{{ route('articles.store') }}" method="POST" class="mt-7" enctype="multipart/form-data">

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
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Título en inglés
                        </label>
                        <input type="text" class="form-control" name="title_en" value="{{ old('title_en') }}">
                        @error('title_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Resumen
                        </label>
                        <textarea name="excerpt" class="form-control" rows="3">{{ old('excerpt') }}</textarea>
                        @error('excerpt')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Resumen en inglés
                        </label>
                        <textarea name="excerpt_en" class="form-control" rows="3">{{ old('excerpt_en') }}</textarea>
                        @error('excerpt_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Contenido
                        </label>
                        <input type="hidden" name="body" id="postEditor" value="{{ old('body') }}">
                        <div id="editor">
                            {!! old('body') !!}
                        </div>
                        
                        @error('body')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Contenido en inglés
                        </label>
                        <input type="hidden" name="body_en" id="postEditorEn" value="{{ old('body_en') }}">
                        <div id="editor_en">
                            {!! old('body_en') !!}
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
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
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
                            <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Borrador</option>
                            <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>Publicado</option>
                        </select>
                        @error('status')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Fecha de publicación
                        </label>
                        <input type="date" name="published_at" class="form-control" value="{{ old('published_at') }}">
                        @error('published_at')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block" type="submit">
                        <i class="fas fa-save mr-2"></i>
                        Crear articulo
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>
</x-app-layout>