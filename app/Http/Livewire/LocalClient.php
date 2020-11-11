<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LocalClient extends Component
{

    public $provinces;
    public $province;
    public $result;
    public $confirmed;
    public $recovered;
    public $deaths;
    public $lastUpdate;

    public function mount()
    {
        $this->provinces = Http::get('https://indonesia-covid-19.mathdro.id/api/provinsi/')->json();
        $this->provinces = $this->provinces['data'];
    }

    public function render()
    {
        return view('livewire.local-client');
    }

    public function search()
    {
        foreach ($this->provinces as $province) {
            if ($this->province == $province['provinsi']) {
                $this->result = $province;
            }
        }
        $this->confirmed = number_format($this->result['kasusPosi']);
        $this->recovered = number_format($this->result['kasusSemb']);
        $this->deaths = number_format($this->result['kasusMeni']);
    }
}
