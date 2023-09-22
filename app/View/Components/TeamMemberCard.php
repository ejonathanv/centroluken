<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamMemberCard extends Component
{


    public $name;
    public $img;
    public $jobtitle;
    public $gender;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $img = null, $jobtitle = null, $gender = 'male')
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->img = $img ? $img : $this->getGenderAvatar();
        $this->jobtitle = $jobtitle ? $jobtitle : 'Doctorado en Desarrollo Regional';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.team-member-card');
    }

    public function getGenderAvatar(){

        if($this->gender == 'male'){
            return 'centro-luken-bio-male-placeholder.png';
        }elseif($this->gender == 'female'){
            return 'centro-luken-bio-female-placeholder.png.png';
        }

    }
}
