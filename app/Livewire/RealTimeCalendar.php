<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class RealTimeCalendar extends Component
{
    public $currentDateTime;

    public function mount()
    {
        $this->currentDateTime = Carbon::now()->format('Y-m-d H:i');
    }

    public function updateTime()
    {
        $this->currentDateTime = Carbon::now()->format('Y-m-d H:i');
    }

    public function render()
    {
        return view('livewire.real-time-calendar');
    }
}
