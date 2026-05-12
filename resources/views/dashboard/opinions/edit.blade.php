<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-6/12 mx-auto">

                <a href="{{ route('opinions.index') }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado de opiniones
                </a>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>Editar opinión</h4>
                </div>

                @if(session('status'))
                <p class="text-secondary text-sm mt-4">{{ session('status') }}</p>
                @endif

                <form action="{{ route('opinions.update', $opinion) }}" method="POST" class="mt-7" enctype="multipart/form-data" id="opinion-form">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Portada (opcional)</label>
                        <div class="mt-4">
                            <input type="file" name="cover_image" accept="image/*">
                        </div>
                        @if($opinion->cover)
                        <div class="mb-4 mt-2">
                            <img src="{{ asset($opinion->cover) }}" class="w-64 mt-4 rounded" alt="">
                        </div>
                        @endif
                        @error('cover_image')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    @if($opinion->cover)
                    <div class="form-group">
                        <input type="hidden" name="remove_cover" value="0">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="remove_cover" value="1" {{ old('remove_cover') ? 'checked' : '' }}>
                            <span class="text-sm">Eliminar portada actual</span>
                        </label>
                        @error('remove_cover')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    @endif

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title', $opinion->title) }}">
                        @error('title')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Título (inglés)</label>
                        <input type="text" class="form-control" name="title_en" value="{{ old('title_en', $opinion->title_en) }}">
                        @error('title_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Cuerpo</label>
                        <input type="hidden" name="body" id="post_body" value="{{ old('body', $opinion->body) }}">
                        <div id="editor_body">{!! old('body', $opinion->body) !!}</div>
                        @error('body')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Cuerpo (inglés)</label>
                        <input type="hidden" name="body_en" id="post_body_en" value="{{ old('body_en', $opinion->body_en) }}">
                        <div id="editor_body_en">{!! old('body_en', $opinion->body_en) !!}</div>
                        @error('body_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>URL externa (opcional)</label>
                        <input type="url" class="form-control" name="url" value="{{ old('url', $opinion->url) }}" placeholder="https://">
                        @error('url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block mt-4" type="submit">
                        <i class="fas fa-save mr-2"></i>
                        Actualizar
                    </button>
                </form>

                <hr class="my-7">

                <form action="{{ route('opinions.destroy', $opinion) }}" method="POST" onsubmit="return confirm('¿Eliminar esta opinión?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-block text-red-400" type="submit">
                        <i class="fas fa-trash mr-2"></i>
                        Eliminar opinión
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
            var form = document.getElementById('opinion-form');
            Promise.all([
                ClassicEditor.create(document.querySelector('#editor_body'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                }),
                ClassicEditor.create(document.querySelector('#editor_body_en'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                }),
            ]).then(function(editors) {
                form.addEventListener('submit', function() {
                    document.getElementById('post_body').value = editors[0].getData();
                    document.getElementById('post_body_en').value = editors[1].getData();
                });
            }).catch(function(err) { console.error(err); });
        });
    </script>
</x-redesign.website-app-layout>
