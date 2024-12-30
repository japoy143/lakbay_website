<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePage extends Component
{

    use WithFileUploads;
    use LivewireAlert;

    public $name;

    public $email;

    public $phone_number;

    public $user_image;

    public function mount()
    {
        $user = User::find(Auth::user()->id)->first();

        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->user_image = $user->user_image;
    }


    public function saveProfile(User $user)
    {
        if (!is_string($this->user_image)) {
            $image_path = $this->user_image->store('Profiles');
        } else {
            $image_path = $this->user_image;
        }

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'user_image' => $image_path
        ]);


        $this->alert('success', 'Successfully edited profile');
    }

    public function render()
    {
        return view('livewire.profile-page');
    }
}
