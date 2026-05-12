<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOpinionRequest;
use App\Http\Requests\UpdateOpinionRequest;
use App\Models\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OpinionController extends Controller
{
    public function index()
    {
        return view('dashboard.opinions.index');
    }

    public function create()
    {
        return view('dashboard.opinions.create');
    }

    public function store(StoreOpinionRequest $request)
    {
        $opinion = new Opinion;
        $this->assignOpinionAttributes($request, $opinion);
        $opinion->slug = $this->uniqueSlug(Str::slug($request->title));
        $opinion->save();

        if ($request->hasFile('cover_image')) {
            $this->uploadCover($request, $opinion);
        }

        return redirect()
            ->route('opinions.edit', $opinion)
            ->with('status', 'La opinión se creó con éxito.');
    }

    public function edit(Opinion $opinion)
    {
        return view('dashboard.opinions.edit', compact('opinion'));
    }

    public function update(UpdateOpinionRequest $request, Opinion $opinion)
    {
        if ($request->boolean('remove_cover') && $opinion->cover) {
            $this->deletePublicFileIfExists($opinion->cover);
            $opinion->cover = null;
        }

        $this->assignOpinionAttributes($request, $opinion);
        $opinion->slug = $this->uniqueSlug(Str::slug($request->title), $opinion->id);
        $opinion->save();

        if ($request->hasFile('cover_image')) {
            $this->uploadCover($request, $opinion);
        }

        return redirect()->back()->with('status', 'La opinión se actualizó con éxito.');
    }

    public function destroy(Opinion $opinion)
    {
        if ($opinion->cover) {
            $this->deletePublicFileIfExists($opinion->cover);
        }

        $opinion->delete();

        return redirect()
            ->route('opinions.index')
            ->with('status', 'La opinión se eliminó con éxito.');
    }

    protected function assignOpinionAttributes(Request $request, Opinion $opinion): void
    {
        $opinion->title = $request->title;
        $opinion->body = $request->body ?? '';
        $opinion->url = $request->filled('url') ? $request->url : null;
    }

    protected function uniqueSlug(string $base, ?int $ignoreId = null): string
    {
        $slug = $base ?: 'opinion';
        $candidate = $slug;
        $n = 1;
        while (
            Opinion::where('slug', $candidate)
                ->when($ignoreId, fn ($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $slug.'-'.$n++;
        }

        return $candidate;
    }

    protected function uploadCover(Request $request, Opinion $opinion): void
    {
        $dir = public_path('opiniones');
        if (! file_exists($dir)) {
            mkdir($dir, 0755, true);
        }

        if ($opinion->cover) {
            $this->deletePublicFileIfExists($opinion->cover);
        }

        $file = $request->file('cover_image');
        $fileName = 'cover-'.time().'.'.$file->getClientOriginalExtension();
        $file->move($dir, $fileName);
        $opinion->cover = 'opiniones/'.$fileName;
        $opinion->save();
    }

    protected function deletePublicFileIfExists(string $path): void
    {
        $full = public_path($path);
        if (file_exists($full)) {
            unlink($full);
        }
    }
}
