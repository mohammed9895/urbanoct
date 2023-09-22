<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Speaker extends Component
{
    public \App\Models\Speaker $speaker;
    public function mount($speaker)
    {
        $this->speaker = $speaker;
    }
    public function render()
    {
        return view('livewire.frontend.speaker');
    }
}
