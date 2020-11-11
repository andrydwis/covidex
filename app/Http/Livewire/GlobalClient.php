<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class GlobalClient extends Component
{

    public $countries;
    public $country;
    public $result;
    public $confirmed;
    public $recovered;
    public $deaths;
    public $lastUpdate;

    public function mount()
    {
        $this->countries = Http::get('https://covid19.mathdro.id/api/countries')->json();
        $this->countries = $this->countries['countries'];
    }

    public function render()
    {
        return view('livewire.global-client');
    }

    public function search()
    {
        if($this->country){
            $api = 'https://covid19.mathdro.id/api/countries/'.$this->country;
            $this->result = Http::get($api)->json();
            $this->confirmed = number_format($this->result['confirmed']['value']);
            $this->recovered = number_format($this->result['recovered']['value']);
            $this->deaths = number_format($this->result['deaths']['value']);
            $this->lastUpdate = Carbon::parse($this->result['lastUpdate']);
        }
    }
}
