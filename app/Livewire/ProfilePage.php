<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfilePage extends Component
{

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

    public function render()
    {
        return view('livewire.profile-page');
    }
}
