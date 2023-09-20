<?php

namespace App\Livewire\Frontend;

use App\Models\Activity;
use Livewire\Component;

class Activities extends Component
{
    public $activities;
    public function mount()
    {
        $this->activities = Activity::all();
    }
    public function render()
    {
        return view('livewire.frontend.activities');
    }
}
