<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopicsTable extends Component
{

    public $topics;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->topics = \App\Models\Topic::orderBy('published_at', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.topics-table');
    }
}