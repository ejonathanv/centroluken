<?php

namespace App\View\Components;

use App\Models\Opinion;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OpinionesTable extends Component
{
    public $opiniones;

    public function __construct()
    {
        $this->opiniones = Opinion::orderByDesc('updated_at')->get();
    }

    public function render(): View|Closure|string
    {
        return view('components.opiniones-table');
    }
}
