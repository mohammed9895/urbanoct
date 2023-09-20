<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Slider extends Component
{
    public $sliders;
    public function mount()
    {
        $this->sliders = \App\Models\Slider::all();
    }
    public function render()
    {
        return view('livewire.frontend.slider');
    }
}
