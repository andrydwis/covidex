<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DashboardClient extends Component
{

    public $summary;
    public $confirmed;
    public $recovered;
    public $deaths;
    public $lastUpdate;

    public function mount()
    {
        $this->summary = Http::get('https://covid19.mathdro.id/api')->json();
        $this->confirmed = number_format($this->summary['confirmed']['value']);
        $this->recovered = number_format($this->summary['recovered']['value']);
        $this->deaths = number_format($this->summary['deaths']['value']);
        $this->lastUpdate = Carbon::parse($this->summary['lastUpdate']);
    }

    public function render()
    {
        return view('livewire.dashboard-client');
    }
}
