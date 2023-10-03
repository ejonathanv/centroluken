<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteHeader2 extends Component
{

    public $admin;

    /**
     * Create a new component instance.
     */
    public function __construct($admin = false)
    {
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website-header2');
    }
}
