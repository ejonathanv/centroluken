<x-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-8/12 mx-auto">
                <a href="{{ route('topics.index') }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Cancelar y regresar al listado de temas de interés
                </a>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>
                        Nuevo enlace
                    </h4>
                </div>

                <form action="{{ route('topics.store') }}" class="mt-7" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">
                            Título en español:
                        </label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                        @error('title')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Título en inglés:
                        </label>
                        <input type="text" name="title_en" class="form-control" value="{{ old('title_en') }}">
                        @error('title_en')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Descripción en español: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <textarea name="description" rows="5" class="form-control">{{ old('description') }}</textarea>
                        @error('description')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Descripción en inglés: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <textarea name="description_en" rows="5" class="form-control">{{ old('description_en') }}</textarea>
                        @error('description_en')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Elige un tema existente:
                        </label>
                        <select name="category_id" id="" class="form-control">
                            <option selected disabled value="">
                                Seleccione un tema
                            </option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">
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
                        <div class="form-group w-1/2">
                            <label for="">
                                Nombre del tema en español
                            </label>
                            <input type="text" name="new_category" class="form-control" value="{{ old('new_category') }}">
                            @error('new_category')
                            <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group w-1/2">
                            <label for="">
                                Nombre del tema en inglés
                            </label>
                            <input type="text" name="new_category_en" class="form-control" value="{{ old('new_category_en') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">
                            URL:
                        </label>
                        <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                        @error('url')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Fuente:
                        </label>
                        <input type="text" name="source" class="form-control" value="{{ old('source') }}">
                        @error('source')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Autor: <span class="text-gray-400">(opcional)</span>
                        </label>
                        <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                        @error('author')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Fecha de publicación:
                        </label>
                        <input type="date" name="published_at" class="form-control" value="{{ old('published_at') }}">
                        @error('published_at')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block">
                        Crear enlace
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

</x-app-layout>