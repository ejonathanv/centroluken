<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-6/12 mx-auto">

                <a href="{{ route('discusiones.index') }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado de discusiones
                </a>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>Nueva discusión</h4>
                </div>

                @if(session('status'))
                <p class="text-secondary text-sm mt-4">{{ session('status') }}</p>
                @endif

                <form action="{{ route('discusiones.store') }}" method="POST" class="mt-7" enctype="multipart/form-data" id="discusion-form">
                    @csrf

                    <div class="form-group">
                        <label>Foto de portada (opcional)</label>
                        <div class="mt-4">
                            <input type="file" name="foto_portada" accept="image/*">
                        </div>
                        @error('foto_portada')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
                        @error('titulo')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Fecha de la discusión</label>
                        <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}">
                        @error('fecha')
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

                    <div class="form-group">
                        <label>Resumen</label>
                        <input type="hidden" name="resumen" id="post_resumen" value="{{ old('resumen') }}">
                        <div id="editor_resumen">{!! old('resumen') !!}</div>
                        @error('resumen')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Archivo PDF (opcional)</label>
                        <div class="mt-4">
                            <input type="file" name="pdf_file" accept="application/pdf">
                        </div>
                        @error('pdf_file')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="mostrar_solo_pdf" value="0">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="mostrar_solo_pdf" value="1" {{ old('mostrar_solo_pdf') ? 'checked' : '' }}>
                            <span>Mostrar solo el PDF en la vista pública (oculta resumen y especificaciones)</span>
                        </label>
                        @error('mostrar_solo_pdf')
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
            var form = document.getElementById('discusion-form');
            Promise.all([
                ClassicEditor.create(document.querySelector('#editor_descripcion'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                }),
                ClassicEditor.create(document.querySelector('#editor_resumen'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                })
            ]).then(function(editors) {
                form.addEventListener('submit', function() {
                    document.getElementById('post_descripcion').value = editors[0].getData();
                    document.getElementById('post_resumen').value = editors[1].getData();
                });
            }).catch(function(err) { console.error(err); });
        });
    </script>
</x-redesign.website-app-layout>
