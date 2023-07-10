<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;

class NavbarComponent extends Component
{
    public $nav = false;

    public function navOn(){
        $this->nav = true;
    }

    public function navOff(){
        $this->nav = false;
    }

    public function render()
    {
        return view('livewire.component.navbar-component');
    }
}
