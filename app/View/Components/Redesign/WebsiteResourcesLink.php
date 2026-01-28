<?php

namespace App\View\Components\Redesign;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteResourcesLink extends Component
{

    public $item;

    /**
     * Create a new component instance.
     */
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-resources-link');
    }
}
