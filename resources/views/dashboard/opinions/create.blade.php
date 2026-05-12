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
                        <label>Cuerpo</label>
                        <input type="hidden" name="body" id="post_body" value="{{ old('body') }}">
                        <div id="editor_body">{!! old('body') !!}</div>
                        @error('body')
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
            if (typeof ClassicEditor === 'undefined') return;
            var form = document.getElementById('opinion-form');
            ClassicEditor.create(document.querySelector('#editor_body'), {
                removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
            }).then(function(editor) {
                form.addEventListener('submit', function() {
                    document.getElementById('post_body').value = editor.getData();
                });
            }).catch(function(err) { console.error(err); });
        });
    </script>
</x-redesign.website-app-layout>
