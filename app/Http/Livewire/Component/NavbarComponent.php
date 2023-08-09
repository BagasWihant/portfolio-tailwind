<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class NavbarComponent extends Component
{
    public $nav = false;
    public $shadowStat = false;


    public function navOn(){
        $this->nav = true;
    }

    public function navOff(){
        $this->nav = false;
    }

    public function shadow($kond){
        $this->shadowStat = $kond;
    }

    public function render()
    {
        return view('livewire.component.navbar-component');
    }
}
