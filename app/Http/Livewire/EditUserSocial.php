<?php

namespace App\Http\Livewire;

use App\Models\UserSocial;
use Livewire\Component;

class EditUserSocial extends Component
{

    public $user;
    public $github;
    public $linkedin;
    public $instagram;

    public function mount()
    {
        $this->user = auth()->user();
        if ($this->user->social) {
            $this->github = $this->user->social->github;
            $this->linkedin = $this->user->social->linkedin;
            $this->instagram = $this->user->social->instagram;
        }
    }

    public function render()
    {
        return view('livewire.edit-user-social');
    }

    public function submit()
    {
        if ($this->user->social) {
            //update
            $social = $this->user->social;
            $social->github = $this->github;
            $social->linkedin = $this->linkedin;
            $social->instagram = $this->instagram;
            $social->save();
            session()->flash('status', 'profile social updated');
            return redirect()->route('editProfile');
        } else {
            //create
            $social = new UserSocial();
            $social->user_id = $this->user->id;
            $social->github = $this->github;
            $social->linkedin = $this->linkedin;
            $social->instagram = $this->instagram;
            $social->save();
            session()->flash('status', 'profile social updated');
            return redirect()->route('editProfile');
        }
    }
}
