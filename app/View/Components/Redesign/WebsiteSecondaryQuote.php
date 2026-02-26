<?php

namespace App\View\Components\Redesign;

use App\Models\TopiCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteSecondaryQuote extends Component
{


    public $quote;
    public $category;

    /**
     * Create a new component instance.
     */
    public function __construct($quote)
    {
        $this->quote = $quote;
        $this->category = $this->getCategory();
    }

    public function getCategory()
    {
        // Obtenemos el id de category a partir del query string (?category=7)
        $request = request();
        $categoryId = $request->query('category');

        if ($categoryId) {
            $category = TopiCategory::find($categoryId);
            return $category ? $category->name : null;
        }

        return null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-secondary-quote');
    }
}
