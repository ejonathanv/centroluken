<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamMemberCard extends Component
{


    public $name;
    public $img;
    public $jobTitle;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $img, $jobTitle = null)
    {
        $this->name = $name;
        $this->img = $img;
        $this->jobTitle = $jobTitle ? $jobTitle : 'Doctorado en Desarrollo Regional';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team-member-card');
    }
}
