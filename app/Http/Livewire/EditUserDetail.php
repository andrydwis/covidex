<?php

namespace App\Http\Livewire;

use App\Models\UserDetail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUserDetail extends Component
{

    use WithFileUploads;

    public $user;
    public $photo;
    public $photoValid;
    public $photoNow;
    public $photoName;
    public $description;

    public function mount()
    {
        $this->user = auth()->user();
        if ($this->user->detail) {
            $this->description = $this->user->detail->description;
            $this->photoNow = 'storage/'.$this->user->detail->photo;
        }
    }

    public function updatedPhoto()
    {
        $validate = Validator::make(['photo' => $this->photo], [
            'photo' => 'image'
        ]);
        if ($validate->fails()) {
            $this->reset(['photoValid', 'photoName']);

            $validate->validate();
        } else {
            $this->photoValid = $this->photo;
            $this->photoName = $this->photo->getClientOriginalName();
            $this->resetValidation();
            $validate->validate();
        }
    }

    public function render()
    {
        return view('livewire.edit-user-detail');
    }

    public function submit()
    {
        $this->resetValidation();
        if ($this->user->detail) {
            //update
            if ($this->photo) {
                $this->validate([
                    'photo' => 'required|image',
                    'description' => 'required|min:10'
                ]);
                //delete
                Storage::delete($this->user->detail->photo);
                $detail = $this->user->detail;
                $detail->photo = $this->photo->store('img/profile');
                $detail->description = $this->description;
                $detail->save();
                session()->flash('status', 'profile detail updated');
                return redirect()->route('editProfile');
            } else {
                $this->validate([
                    'description' => 'required|min:10'
                ]);
                $detail = $this->user->detail;
                $detail->description = $this->description;
                $detail->save();
                session()->flash('status', 'profile detail updated');
                return redirect()->route('editProfile');
            }
        } else {
            //create
            if ($this->photo) {
                $this->validate([
                    'photo' => 'required|image',
                    'description' => 'required|min:10'
                ]);
                $detail = new UserDetail();
                $detail->user_id = $this->user->id;
                $detail->photo = $this->photo->store('img/profile');
                $detail->description = $this->description;
                $detail->save();
                session()->flash('status', 'profile detail updated');
                return redirect()->route('editProfile');
            } else {
                $this->validate([
                    'description' => 'required|min:10'
                ]);
                $detail = new UserDetail();
                $detail->user_id = $this->user->id;
                $detail->description = $this->description;
                $detail->save();
                session()->flash('status', 'profile detail updated');
                return redirect()->route('editProfile');
            }
        }
    }
}
