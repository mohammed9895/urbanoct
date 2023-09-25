<?php

namespace App\Livewire\Frontend;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $events;
    public function mount()
    {
        $this->events = Event::all();
    }

    public function render()
    {
        return view('livewire.frontend.events');
    }
}
