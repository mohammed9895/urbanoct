<?php

namespace App\Livewire\Frontend;

use App\Models\Agenda;
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

    public function download(Agenda $agenda)
    {
        $file= storage_path('app/public/' . $agenda->paper);

        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, $agenda->title . ' paper.pdf', $headers);
    }
}
