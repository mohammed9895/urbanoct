<?php

namespace App\Livewire\Frontend;

use App\Models\Agenda;
use App\Models\Day;
use App\Models\Stage;
use Livewire\Component;

class Agendas extends Component
{
    public $stages;
    public $days;
    public $agendas;
    public $day_id = 12;
    public $stage_id = 1;

    public $lg_days;

    public function mount()
    {
        $this->stages = Stage::all();
        $this->days = Day::all();
        $this->lg_days = Day::with(['agendas' => fn($query) => $query->where('stage_id', '=', $this->stage_id)])
            ->whereHas('agendas', fn($query) => $query->where('stage_id', '=',$this->stage_id)
            )
            ->get();
        $this->agendas = Agenda::where('stage_id', $this->stage_id)->where('day_id', $this->day_id)->get();
    }

    public function render()
    {
        return view('livewire.frontend.agendas');
    }

    public function changeStage($id)
    {
        $this->stage_id = $id;
        $this->lg_days = Day::with(['agendas' => fn($query) => $query->where('stage_id', '=', $this->stage_id)])
            ->whereHas('agendas', fn($query) => $query->where('stage_id', '=',$this->stage_id)
            )
            ->get();
        $this->agendas = Agenda::where('stage_id', $this->stage_id)->where('day_id', $this->day_id)->get();
    }

    public function changeDay($id)
    {
        $this->day_id = $id;
        $this->agendas = Agenda::where('stage_id', $this->stage_id)->where('day_id', $this->day_id)->get();
    }
}
