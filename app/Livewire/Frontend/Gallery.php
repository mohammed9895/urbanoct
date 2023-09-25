<?php

namespace App\Livewire\Frontend;

use App\Models\Activity;
use Livewire\Component;

class Gallery extends Component
{
    public $sliders;
    public $title;
    public function mount()
    {
        $this->title = __('home.flash_back.title');
        $this->sliders = \App\Models\Slider::all();
    }
    public function render()
    {
        return view('livewire.frontend.gallery');
    }
}
