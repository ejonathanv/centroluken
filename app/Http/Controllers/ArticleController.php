<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('dashboard.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $article = new Article();
        $article = $this->set_article_data($request, $article);

        return redirect()
            ->route('articles.edit', $article)
            ->with('status', 'El artículo fue creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $categories = Category::orderBy('name')->get();
        return view('dashboard.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        
        $article = $this->set_article_data($request, $article);

        return redirect()->back()->with('status', 'El artículo fue actualizado con éxito.');

    }

    public function set_article_data($request, $article) {
        $article->title = $request->title;
        $article->title_en = $request->title_en;
        $article->excerpt = $request->excerpt;
        $article->excerpt_en = $request->excerpt_en;
        $article->body = $request->body;
        $article->body_en = $request->body_en;
        $article->published = $request->published == 1 ? false : true;
        $article->published_at = $request->published_at;
        $article->category_id = $request->category_id;
        $article->slug = Str::slug($request->title);

        $article->save();

        if ($request->hasFile('cover')) {
            $this->uploadFile($request, $article);
        }

        return $article;
    }

    public function uploadFile($request, $article)
    {
        // We need to move the file to the public path public/articles and then save the path in the database.
        $file = $request->file('cover');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('articles'), $fileName);
        $article->cover = 'articles/' . $fileName;

        $article->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('dashboard')->with('status', 'El artículo fue eliminado con éxito.');
    }
}
