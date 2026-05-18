<?php

namespace App\View\Components\Redesign;

use App\Models\Topic;
use App\Models\TopiCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

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
        $latestTopicSub = Topic::select(DB::raw('MAX(created_at)'))
            ->whereColumn('category_id', 'topi_categories.id');

        return TopiCategory::with(['topics' => function ($query) {
            $query->latest('created_at');
        }])
            ->addSelect(['latest_topic_date' => $latestTopicSub])
            ->withCount('topics')
            ->orderByRaw('latest_topic_date IS NULL')
            ->orderByDesc('latest_topic_date')
            ->orderByDesc('topics_count')
            ->orderBy('name')
            ->get();
    }

    public function getTopicsFromCategory()
    {
        $selectedCategory = request()->query('category');

        if (! $selectedCategory) {
            $category = $this->categories->first();

            return $category ? $category->topics()->latest('created_at')->paginate(10) : collect();
        }

        $category = TopiCategory::find($selectedCategory);
        if (! $category) {
            return collect();
        }

        return $category->topics()->latest('created_at')->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-resources-list');
    }
}
