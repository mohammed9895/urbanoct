<?php

namespace App\Livewire\Frontend;

use App\Models\Activity;
use Livewire\Component;

class Activities extends Component
{
    public $activities;
    public $title;
    public function mount()
    {
        $this->title = __('home.activities.title');
        $this->activities = Activity::all();
    }
    public function render()
    {
        return view('livewire.frontend.activities');
    }
}
