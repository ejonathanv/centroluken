<x-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-8/12 mx-auto">
                <a href="{{ route('topics.index') }}?type=PDF" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado de temas de interés
                </a>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>
                        Editar PDF
                    </h4>
                </div>

                @if(session('success'))
                <div class="bg-secondary text-white p-3 mb-5 text-sm rounded">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('topics.update', $topic) }}" class="mt-7" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="type" value="PDF">

                    @if($topic->pdf_path)
                    <div class="form-group">
                        <label class="block mb-2">
                            PDF Actual:
                        </label>
                        <a href="{{ asset($topic->pdf_path) }}" target="_blank" class="text-blue-500 hover:underline">
                            <i class="fas fa-file-pdf mr-2"></i>Ver PDF actual
                        </a>
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="">
                            Reemplazar archivo PDF: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <input type="file" name="pdf_file" class="form-control" accept=".pdf">
                        @error('pdf_file')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Título principal del tema en español -->
                    <div class="form-group">
                        <label for="">
                            Título en español:
                        </label>
                        <input type="text" name="title" class="form-control" value="{{ old('title', $topic->title) }}">
                        @error('title')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Título principal del tema en inglés -->
                    <div class="form-group">
                        <label for="">
                            Título en inglés:
                        </label>
                        <input type="text" name="title_en" class="form-control" value="{{ old('title_en', $topic->title_en) }}">
                        @error('title_en')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Descripción detallada del tema en español -->
                    <div class="form-group">
                        <label for="">
                            Descripción en español: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <textarea name="description" rows="5" class="form-control">{{ old('description', $topic->description) }}</textarea>
                        @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Descripción detallada del tema en inglés -->
                    <div class="form-group">
                        <label for="">
                            Descripción en inglés: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <textarea name="description_en" rows="5" class="form-control">{{ old('description_en', $topic->description_en) }}</textarea>
                        @error('description_en')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Selector de categoría existente -->
                    <div class="form-group">
                        <label for="">
                            Elige un tema existente:
                        </label>
                        <select name="category_id" id="" class="form-control">
                            <option selected disabled value="">
                                Seleccione un tema
                            </option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $topic->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <p class="text-gray-500 text-sm mt-5 mb-5">
                        Ó bien, crea un nuevo tema: (si eliges un tema existente, el nuevo tema no se creará).
                    </p>
                    <div class="flex items-start space-x-7">
                        <!-- Nombre de nueva categoría en español -->
                        <div class="form-group w-1/2">
                            <label for="">
                                Nombre del tema en español
                            </label>
                            <input type="text" name="new_category" class="form-control" value="{{ old('new_category') }}">
                            @error('new_category')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nombre de nueva categoría en inglés -->
                        <div class="form-group w-1/2">
                            <label for="">
                                Nombre del tema en inglés
                            </label>
                            <input type="text" name="new_category_en" class="form-control" value="{{ old('new_category_en') }}">
                        </div>
                    </div>

                    <!-- Fuente o origen del contenido -->
                    <div class="form-group">
                        <label for="">
                            Fuente:
                        </label>
                        <input type="text" name="source" class="form-control" value="{{ old('source', $topic->source) }}">
                        @error('source')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Autor del contenido -->
                    <div class="form-group">
                        <label for="">
                            Autor: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <input type="text" name="author" class="form-control" value="{{ old('author', $topic->author) }}">
                        @error('author')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Fecha de publicación del contenido -->
                    <div class="form-group">
                        <label for="">
                            Fecha de publicación:
                        </label>
                        <input type="date" name="published_at" class="form-control" value="{{ old('published_at', $topic->published_at->format('Y-m-d')) }}">
                        @error('published_at')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block">
                        Actualizar PDF
                    </button>
                </form>

                <hr class="my-6">

                <form action="{{ route('topics.destroy', $topic) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar este tema de interés?')">
                    @csrf
                    @method('DELETE')

                    <p class="text-red-500 text-xs mb-3">
                        Al eliminar este PDF se eliminará de la base de datos y no se podrá recuperar. ¿Está seguro de eliminar este tema de interés?
                    </p>

                    <button class="btn btn-danger border-red-500 btn-block" type="submit">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-app-layout> 