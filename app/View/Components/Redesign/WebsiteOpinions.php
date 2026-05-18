<?php

namespace App\View\Components\Redesign;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Opinion;

class WebsiteOpinions extends Component
{

    public $opinions;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->opinions = $this->get_last_opinions();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-opinions');
    }

    public function get_last_opinions(){
        return Opinion::where('on_homepage', true)
            ->whereIn('position', [1, 2, 3])
            ->orderBy('position')
            ->take(3)
            ->get();
    }
}
