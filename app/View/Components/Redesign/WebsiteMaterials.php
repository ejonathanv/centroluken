<?php

namespace App\View\Components\Redesign;

use App\Models\Discusion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteMaterials extends Component
{
    public ?Discusion $discusionDestacada;

    public function __construct()
    {
        $this->discusionDestacada = Discusion::orderByDesc('fecha')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.redesign.website-materials');
    }
}
