<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiscusionRequest;
use App\Http\Requests\UpdateDiscusionRequest;
use App\Models\Discusion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscusionController extends Controller
{
    public function index()
    {
        return view('dashboard.discusiones.index');
    }

    public function create()
    {
        return view('dashboard.discusiones.create');
    }

    public function store(StoreDiscusionRequest $request)
    {
        $discusion = new Discusion();
        $this->assignDiscusionAttributes($request, $discusion);
        $discusion->slug = $this->uniqueSlug(Str::slug($request->titulo));
        $discusion->save();

        if ($request->hasFile('foto_portada')) {
            $this->uploadCover($request, $discusion);
        }

        if ($request->hasFile('pdf_file')) {
            $this->uploadPdf($request, $discusion);
        }

        return redirect()
            ->route('discusiones.edit', $discusion)
            ->with('status', 'La discusión se creó con éxito.');
    }

    public function edit(Discusion $discusion)
    {
        return view('dashboard.discusiones.edit', compact('discusion'));
    }

    public function update(UpdateDiscusionRequest $request, Discusion $discusion)
    {
        if ($request->boolean('remove_pdf') && $discusion->pdf_path) {
            $this->deletePublicFileIfExists($discusion->pdf_path);
            $discusion->pdf_path = null;
            $discusion->mostrar_solo_pdf = false;
        }

        $this->assignDiscusionAttributes($request, $discusion);
        $discusion->slug = $this->uniqueSlug(Str::slug($request->titulo), $discusion->id);
        $discusion->save();

        if ($request->hasFile('foto_portada')) {
            $this->uploadCover($request, $discusion);
        }

        if ($request->hasFile('pdf_file')) {
            if ($discusion->pdf_path) {
                $this->deletePublicFileIfExists($discusion->pdf_path);
            }
            $this->uploadPdf($request, $discusion);
        }

        return redirect()->back()->with('status', 'La discusión se actualizó con éxito.');
    }

    public function destroy(Discusion $discusion)
    {
        if ($discusion->foto_portada) {
            $this->deletePublicFileIfExists($discusion->foto_portada);
        }
        if ($discusion->pdf_path) {
            $this->deletePublicFileIfExists($discusion->pdf_path);
        }

        $discusion->delete();

        return redirect()
            ->route('discusiones.index')
            ->with('status', 'La discusión se eliminó con éxito.');
    }

    protected function assignDiscusionAttributes(Request $request, Discusion $discusion): void
    {
        $discusion->titulo = $request->titulo;
        $discusion->fecha = $request->fecha;
        $discusion->descripcion = $request->descripcion ?? '';
        $discusion->resumen = $request->resumen ?? '';
        $discusion->mostrar_solo_pdf = $request->boolean('mostrar_solo_pdf');
    }

    protected function uniqueSlug(string $base, ?int $ignoreId = null): string
    {
        $slug = $base ?: 'discusion';
        $candidate = $slug;
        $n = 1;
        while (
            Discusion::where('slug', $candidate)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $slug.'-'.$n++;
        }

        return $candidate;
    }

    protected function uploadCover(Request $request, Discusion $discusion): void
    {
        $dir = public_path('discusiones');
        if (! file_exists($dir)) {
            mkdir($dir, 0755, true);
        }

        if ($discusion->foto_portada) {
            $this->deletePublicFileIfExists($discusion->foto_portada);
        }

        $file = $request->file('foto_portada');
        $fileName = 'cover-'.time().'.'.$file->getClientOriginalExtension();
        $file->move($dir, $fileName);
        $discusion->foto_portada = 'discusiones/'.$fileName;
        $discusion->save();
    }

    protected function uploadPdf(Request $request, Discusion $discusion): void
    {
        $pdfPath = public_path('pdfDiscusiones');
        if (! file_exists($pdfPath)) {
            mkdir($pdfPath, 0755, true);
        }

        $file = $request->file('pdf_file');
        $fileName = Str::slug($discusion->titulo).'-'.time().'.'.$file->getClientOriginalExtension();
        $file->move($pdfPath, $fileName);
        $discusion->pdf_path = 'pdfDiscusiones/'.$fileName;
        $discusion->save();
    }

    protected function deletePublicFileIfExists(string $path): void
    {
        $full = public_path($path);
        if (file_exists($full)) {
            unlink($full);
        }
    }
}
