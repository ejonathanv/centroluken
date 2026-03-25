<?php

namespace App\View\Components;

use App\Models\Discusion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DiscusionesTable extends Component
{
    public $discusiones;

    public function __construct()
    {
        $this->discusiones = Discusion::orderByDesc('fecha')->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.discusiones-table');
    }
}
