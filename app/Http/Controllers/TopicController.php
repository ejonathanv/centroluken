<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\TopiCategory;
use App\Http\Requests\StoreTopicRequest;
use App\Http\Requests\UpdateTopicRequest;

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

        return redirect()->route('topics.edit', $topic)->with('success', 'El enlace se creó con éxito');

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
        return view('dashboard.topics.edit', compact('topic', 'categories'));
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

        $topic->save();

        return redirect()->back()->with('success', 'El enlace se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();

        return redirect()->route('topics.index')->with('success', 'El tema de interés se eliminó con éxito');
    }
}
