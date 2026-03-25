<?php

namespace App\View\Components\Redesign;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteResourcesCard extends Component
{

    public $title;
    public $description;
    public $image;
    public $link;

    /**
     * Create a new component instance.
     */
    public function __construct($title, $description,$image, $link)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-resources-card');
    }
}
