<?php

namespace App\Livewire\Frontend;

use App\Models\Day;
use App\Models\Event;
use App\Models\Sponsor;
use Livewire\Component;

class Home extends Component
{
    public $days;
    public $sponsors;
    public $events;
    public function mount()
    {
        $this->days = Day::all();
        $this->sponsors = Sponsor::all();
        $this->events = Event::all();
    }
    public function render()
    {
        return view('livewire.frontend.home');
    }
}
