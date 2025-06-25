<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\TopiCategory;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.topics.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = TopiCategory::orderBy('name')->get();
        return view('dashboard.topics.create', compact('categories'));
    }

    public function createPdf()
    {
        $categories = TopiCategory::orderBy('name')->get();
        return view('dashboard.topics.create-pdf', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic();
        $topic->title = $request->title;
        $topic->title_en = $request->title_en;
        $topic->description = $request->description;
        $topic->description_en = $request->description_en;
        $topic->url = $request->url;
        $topic->source = $request->source;
        $topic->author = $request->author;
        $topic->published_at = $request->published_at;
        $topic->type = $request->type;

        if($request->new_category) {
            $category = new TopiCategory();
            $category->name = $request->new_category;
            $category->name_en = $request->new_category_en;
            $category->save();

            $topic->category_id = $category->id;
        } else {
            $topic->category_id = $request->category_id;
        }

        $topic->save();

        if ($request->type === 'PDF' && $request->hasFile('pdf_file')) {
            // Asegurarnos que existe la carpeta
            $pdfPath = public_path('pdfTopics');
            if (!file_exists($pdfPath)) {
                mkdir($pdfPath, 0755, true);
            }

            // Procesar el archivo
            $file = $request->file('pdf_file');
            $fileName = Str::slug($topic->title) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($pdfPath, $fileName);

            // Guardar la ruta en la base de datos
            $topic->pdf_path = 'pdfTopics/' . $fileName;
            $topic->save();
        }

        $response = '';
        if($topic->type === 'PDF') {
            $response = 'El PDF se creó con éxito';
        } else {
            $response = 'El enlace se creó con éxito';
        }

        $route = '';
        if($topic->type === 'PDF') {
            $route = route('edit-pdf-topic', $topic);
        } else {
            $route = route('topics.edit', $topic);
        }

        return redirect($route)->with('success', $response);
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        $categories = TopiCategory::orderBy('name')->get();

        $view = $topic->type === 'PDF' ? 'dashboard.topics.edit-pdf' : 'dashboard.topics.edit';

        return view($view, compact('topic', 'categories'));
    }

    public function editPdf(Topic $topic)
    {
        if ($topic->type !== 'PDF') {
            return redirect()->route('topics.edit', $topic);
        }

        $categories = TopiCategory::orderBy('name')->get();
        return view('dashboard.topics.edit-pdf', compact('topic', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $topic->title = $request->title;
        $topic->title_en = $request->title_en;
        $topic->description = $request->description;
        $topic->description_en = $request->description_en;
        $topic->url = $request->url;
        $topic->source = $request->source;
        $topic->author = $request->author;
        $topic->published_at = $request->published_at;

        if($request->new_category) {
            $category = new TopiCategory();
            $category->name = $request->new_category;
            $category->name_en = $request->new_category_en;
            $category->save();

            $topic->category_id = $category->id;
        } else {
            $topic->category_id = $request->category_id;
        }

        // Manejar actualización de PDF si es necesario
        if ($topic->type === 'PDF' && $request->hasFile('pdf_file')) {
            // Eliminar PDF anterior si existe
            if ($topic->pdf_path && file_exists(public_path($topic->pdf_path))) {
                unlink(public_path($topic->pdf_path));
            }

            // Guardar nuevo PDF
            $pdfPath = public_path('pdfTopics');
            if (!file_exists($pdfPath)) {
                mkdir($pdfPath, 0755, true);
            }

            $file = $request->file('pdf_file');
            $fileName = Str::slug($topic->title) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($pdfPath, $fileName);

            $topic->pdf_path = 'pdfTopics/' . $fileName;
        }

        $topic->save();

        $response = '';
        if($topic->type === 'PDF') {
            $response = 'El PDF se actualizó con éxito';
        } else {
            $response = 'El enlace se actualizó con éxito';
        }

        return redirect()->back()->with('success', $response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {

        $type = $topic->type;

        $topic->delete();

        $route = '';
        if($type === 'PDF') {
            $route = route('topics.index') . '?type=PDF';
        } else {
            $route = route('topics.index') . '?type=article';
        }

        return redirect($route)->with('success', 'El tema de interés se eliminó con éxito');
    }
}
