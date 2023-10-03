<?php

namespace App\View\Components;

use Closure;
use App\Models\Article;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ArticlesTable extends Component
{

    public $articles;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->articles = $this->getArticles();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles-table');
    }

    public function getArticles(){
        $articles = Article::latest()->paginate(6);
        return $articles;
    }
}
