<?php

namespace App\Livewire\Frontend;

use Livewire\Component;

class Feeds extends Component
{
    public $feeds;
    public $title;
    public function mount()
    {
        $this->title = __('home.feeds.title');
        $this->feeds = \App\Models\Feed::all();
    }
    public function render()
    {
        return view('livewire.frontend.feeds');
    }
}
