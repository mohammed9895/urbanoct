<?php

namespace App\Livewire\Frontend;

use App\Models\KeyNote;
use Livewire\Component;

class KeyNotes extends Component
{
    public $key_notes;
    public function mount()
    {
        $this->key_notes = KeyNote::all();
    }
    public function render()
    {
        return view('livewire.frontend.key-notes');
    }
}
