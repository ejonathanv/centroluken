<?php

namespace App\View\Components\Redesign;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteWhiteQuote extends Component
{

    public $quote;

    /**
     * Create a new component instance.
     */
    public function __construct($quote)
    {
        $this->quote = $quote;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-white-quote');
    }
}
