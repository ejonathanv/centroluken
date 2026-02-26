<?php

namespace App\View\Components\Redesign;

use Closure;
use App\Models\Topic;
use App\Models\TopiCategory;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class WebsiteResourcesList extends Component
{

    public $categories;
    public $topics;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = $this->getAllTopiCategories();
        $this->topics = $this->getTopicsFromCategory();
    }

    public function getAllTopiCategories()
    {
        return TopiCategory::with(['topics' => function ($query) {
            $query->latest('created_at');
        }])
            ->withCount(['topics as latest_topic_date' => function ($query) {
                $query->select(DB::raw('MAX(created_at)'));
            }])
            ->orderByDesc('latest_topic_date')
            ->orderBy('name')
            ->get();
    }

    public function getTopicsFromCategory()
    {
        $selectedCategory = request()->query('category');

        if (!$selectedCategory) {
            $category = $this->categories->first();
            return $category ? $category->topics()->paginate(10) : collect();
        }

        $category = TopiCategory::find($selectedCategory);
        if (!$category) {
            return collect();
        }

        return $category->topics()->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-resources-list');
    }
}
