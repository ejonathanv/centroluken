<?php

namespace App\View\Components\Redesign;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteStrategiesItem extends Component
{
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($image)
    {
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-strategies-item');
    }
}
