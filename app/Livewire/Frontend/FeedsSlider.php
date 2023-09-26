<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class FeedsSlider extends Component
{
    public $sliders;
    public function mount()
    {
        $this->sliders = \App\Models\Feed::all();
    }
    public function render()
    {
        return view('livewire.frontend.feeds-slider');
    }
}
