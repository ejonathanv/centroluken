<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-6/12 mx-auto">

                <a href="{{ route('opinions.index') }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado de opiniones
                </a>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>Nueva opinión</h4>
                </div>

                @if(session('status'))
                <p class="text-secondary text-sm mt-4">{{ session('status') }}</p>
                @endif

                <form action="{{ route('opinions.store') }}" method="POST" class="mt-7" enctype="multipart/form-data" id="opinion-form">
                    @csrf

                    <div class="form-group">
                        <label>Portada (opcional)</label>
                        <div class="mt-4">
                            <input type="file" name="cover_image" accept="image/*">
                        </div>
                        @error('cover_image')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Título (inglés)</label>
                        <input type="text" class="form-control" name="title_en" value="{{ old('title_en') }}">
                        @error('title_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Cuerpo</label>
                        <input type="hidden" name="body" id="post_body" value="{{ old('body') }}">
                        <div id="editor_body">{!! old('body') !!}</div>
                        @error('body')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Cuerpo (inglés)</label>
                        <input type="hidden" name="body_en" id="post_body_en" value="{{ old('body_en') }}">
                        <div id="editor_body_en">{!! old('body_en') !!}</div>
                        @error('body_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>URL externa (opcional)</label>
                        <input type="url" class="form-control" name="url" value="{{ old('url') }}" placeholder="https://">
                        @error('url')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Autor (opcional)</label>
                        <input type="text" class="form-control" name="author" value="{{ old('author') }}">
                        @error('author')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Fecha de publicación (opcional)</label>
                        <input type="date" class="form-control" name="date_published" value="{{ old('date_published') }}">
                        @error('date_published')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="on_homepage" value="0">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="on_homepage" value="1" id="on_homepage" {{ old('on_homepage') ? 'checked' : '' }}>
                            <span class="text-sm">Mostrar en el home</span>
                        </label>
                        @error('on_homepage')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group" id="position-group" style="{{ old('on_homepage') ? '' : 'display: none;' }}">
                        <label>Posición en el home</label>
                        <select class="form-control" name="position" id="position">
                            <option value="">Seleccionar posición</option>
                            <option value="1" {{ old('position') == '1' ? 'selected' : '' }}>1</option>
                            <option value="2" {{ old('position') == '2' ? 'selected' : '' }}>2</option>
                            <option value="3" {{ old('position') == '3' ? 'selected' : '' }}>3</option>
                        </select>
                        @error('position')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block mt-4" type="submit">
                        <i class="fas fa-save mr-2"></i>
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="section_divider"></section>
    <section class="section_divider"></section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var onHomepage = document.getElementById('on_homepage');
            var positionGroup = document.getElementById('position-group');
            var positionSelect = document.getElementById('position');

            function togglePositionField() {
                if (onHomepage.checked) {
                    positionGroup.style.display = '';
                    positionSelect.disabled = false;
                } else {
                    positionGroup.style.display = 'none';
                    positionSelect.disabled = true;
                    positionSelect.value = '';
                }
            }

            onHomepage.addEventListener('change', togglePositionField);
            togglePositionField();

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
