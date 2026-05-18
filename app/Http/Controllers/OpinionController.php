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
        $existingAuthors = Opinion::distinctAuthors();

        return view('dashboard.opinions.create', compact('existingAuthors'));
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
        $existingAuthors = Opinion::distinctAuthors();

        return view('dashboard.opinions.edit', compact('opinion', 'existingAuthors'));
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
        $opinion->title_en = $request->filled('title_en') ? $request->title_en : null;
        $opinion->body = $request->body ?? '';
        $opinion->body_en = $this->nullableHtmlBody($request->input('body_en'));
        $opinion->url = $request->filled('url') ? $request->url : null;
        $opinion->author = $request->filled('author') ? $request->author : null;
        $opinion->date_published = $request->filled('date_published') ? $request->date_published : null;
        $opinion->on_homepage = $request->boolean('on_homepage');

        if ($opinion->on_homepage) {
            $opinion->position = (int) $request->position;
        } else {
            $opinion->position = 0;
        }
    }

    protected function nullableHtmlBody(?string $html): ?string
    {
        if ($html === null || trim(strip_tags($html)) === '') {
            return null;
        }

        return $html;
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
