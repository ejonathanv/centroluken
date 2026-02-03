<?php

namespace App\View\Components\Redesign;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteFounderBio extends Component
{

    public $name;
    public $pictureOne;
    public $pictureTwo;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $pictureOne, $pictureTwo)
    {
        $this->name = $name;
        $this->pictureOne = $pictureOne;
        $this->pictureTwo = $pictureTwo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-founder-bio');
    }
}
