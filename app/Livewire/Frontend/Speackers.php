<?php

namespace App\Livewire\Frontend;

use App\Models\Agenda;
use App\Models\Day;
use App\Models\Speaker;
use Livewire\Component;

class Speackers extends Component
{
    public $days;
    public $day_id;
    public $speakers;
    public function mount()
    {
        $this->day_id = 12;
        $this->days = Day::all();
        $this->speakers = Speaker::where('day_id', $this->day_id)->get();
    }
    public function render()
    {
        return view('livewire.frontend.speackers');
    }
    public function changeDay($id)
    {
        ray($id);
        $this->day_id = $id;
        $this->speakers = Speaker::where('day_id', $this->day_id)->get();
    }
}
