<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AnimalCard extends Component
{
    public $animal;

    public function __construct($animal)
    {
        $this->animal = $animal;
    }

    public function render()
    {
        return view('components.animal-card');
    }
}
