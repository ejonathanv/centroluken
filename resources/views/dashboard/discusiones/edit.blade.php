<x-redesign.website-app-layout>
    <section class="py-16">
        <div class="container">
            <div class="w-6/12 mx-auto">

                <a href="{{ route('discusiones.index') }}" class="mb-5 text-sm">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al listado de discusiones
                </a>

                <p class="mt-4 mb-2">
                    <a href="{{ route('discusiones.especificaciones.index', $discusion) }}" class="text-secondary underline text-sm">
                        Gestionar especificaciones
                    </a>
                </p>

                <div class="flex items-center justify-between border-b border-gray-200 pb-5 mt-7">
                    <h4>Editar discusión</h4>
                </div>

                @if(session('status'))
                <p class="text-secondary text-sm mt-4">{{ session('status') }}</p>
                @endif

                <form action="{{ route('discusiones.update', $discusion) }}" method="POST" class="mt-7" enctype="multipart/form-data" id="discusion-form">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Foto de portada (opcional)</label>
                        <div class="mt-4">
                            <input type="file" name="foto_portada" accept="image/*">
                        </div>
                        @if($discusion->foto_portada)
                        <div class="mb-4 mt-2">
                            <img src="{{ asset($discusion->foto_portada) }}" class="w-64 mt-4 rounded" alt="">
                        </div>
                        @endif
                        @error('foto_portada')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="titulo" value="{{ old('titulo', $discusion->titulo) }}">
                        @error('titulo')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Título (inglés)</label>
                        <input type="text" class="form-control" name="titulo_en" value="{{ old('titulo_en', $discusion->titulo_en) }}">
                        @error('titulo_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Fecha de la discusión</label>
                        <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $discusion->fecha->format('Y-m-d')) }}">
                        @error('fecha')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Descripción</label>
                        <input type="hidden" name="descripcion" id="post_descripcion" value="{{ old('descripcion', $discusion->descripcion) }}">
                        <div id="editor_descripcion">{!! old('descripcion', $discusion->descripcion) !!}</div>
                        @error('descripcion')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Descripción (inglés)</label>
                        <input type="hidden" name="descripcion_en" id="post_descripcion_en" value="{{ old('descripcion_en', $discusion->descripcion_en) }}">
                        <div id="editor_descripcion_en">{!! old('descripcion_en', $discusion->descripcion_en) !!}</div>
                        @error('descripcion_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Resumen</label>
                        <input type="hidden" name="resumen" id="post_resumen" value="{{ old('resumen', $discusion->resumen) }}">
                        <div id="editor_resumen">{!! old('resumen', $discusion->resumen) !!}</div>
                        @error('resumen')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Resumen (inglés)</label>
                        <input type="hidden" name="resumen_en" id="post_resumen_en" value="{{ old('resumen_en', $discusion->resumen_en) }}">
                        <div id="editor_resumen_en">{!! old('resumen_en', $discusion->resumen_en) !!}</div>
                        @error('resumen_en')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    @if($discusion->pdf_path)
                    <div class="form-group">
                        <p class="text-sm mb-2">PDF actual: <a href="{{ asset($discusion->pdf_path) }}" target="_blank" class="underline text-secondary">Ver</a></p>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="remove_pdf" value="1" {{ old('remove_pdf') ? 'checked' : '' }}>
                            <span class="text-sm">Eliminar PDF actual</span>
                        </label>
                    </div>
                    @endif

                    <div class="form-group">
                        <label>{{ $discusion->pdf_path ? 'Reemplazar PDF' : 'Archivo PDF (opcional)' }}</label>
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
                            <input type="checkbox" name="mostrar_solo_pdf" value="1" {{ old('mostrar_solo_pdf', $discusion->mostrar_solo_pdf) ? 'checked' : '' }}>
                            <span>Mostrar solo el PDF en la vista pública (oculta resumen y especificaciones)</span>
                        </label>
                        @error('mostrar_solo_pdf')
                            <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-block mt-4" type="submit">
                        <i class="fas fa-save mr-2"></i>
                        Actualizar
                    </button>
                </form>

                <hr class="my-7">

                <form action="{{ route('discusiones.destroy', $discusion) }}" method="POST" onsubmit="return confirm('¿Eliminar esta discusión y todas sus especificaciones?')">
                    @csrf
                    @method('DELETE')
                    <p class="text-red-500 text-xs mt-5 mb-4">
                        Al eliminar se borrarán también las especificaciones relacionadas.
                    </p>
                    <button class="btn btn-danger btn-block text-red-400" type="submit">
                        <i class="fas fa-trash mr-2"></i>
                        Eliminar discusión
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
                ClassicEditor.create(document.querySelector('#editor_descripcion_en'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                }),
                ClassicEditor.create(document.querySelector('#editor_resumen'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                }),
                ClassicEditor.create(document.querySelector('#editor_resumen_en'), {
                    removePlugins: ['CKBox', 'CKFinder', 'EasyImage', 'ImageUpload', 'MediaEmbed'],
                })
            ]).then(function(editors) {
                form.addEventListener('submit', function() {
                    document.getElementById('post_descripcion').value = editors[0].getData();
                    document.getElementById('post_descripcion_en').value = editors[1].getData();
                    document.getElementById('post_resumen').value = editors[2].getData();
                    document.getElementById('post_resumen_en').value = editors[3].getData();
                });
            }).catch(function(err) { console.error(err); });
        });
    </script>
</x-redesign.website-app-layout>
