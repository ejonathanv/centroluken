<?php

namespace App\View\Components\Redesign;

use App\Models\Opinion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WebsiteOpinionListCard extends Component
{
    public function __construct(
        public Opinion $opinion
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.redesign.website-opinion-list-card');
    }
}
