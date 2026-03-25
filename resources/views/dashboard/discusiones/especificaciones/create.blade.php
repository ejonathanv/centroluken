<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-6/12 mx-auto">
                <a href="{{ route('discusiones.especificaciones.index', $discusion) }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado
                </a>

                <h4 class="border-b border-gray-200 pb-5 mt-7">Nueva especificación</h4>

                <form action="{{ route('discusiones.especificaciones.store', $discusion) }}" method="POST" class="mt-7" id="espec-form">
                    @csrf

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
                        @error('titulo')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Orden</label>
                        <input type="number" class="form-control" name="orden" value="{{ old('orden', 0) }}" min="0">
                        @error('orden')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="hidden" name="descripcion" id="post_descripcion" value="{{ old('descripcion') }}">
                        <div id="editor_descripcion">{!! old('descripcion') !!}</div>
                        @error('descripcion')
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
            var form = document.getElementById('espec-form');
            ClassicEditor.create(document.querySelector('#editor_descripcion'), {
                removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
            }).then(function(editor) {
                form.addEventListener('submit', function() {
                    document.getElementById('post_descripcion').value = editor.getData();
                });
            }).catch(function(err) { console.error(err); });
        });
    </script>
</x-redesign.website-app-layout>
