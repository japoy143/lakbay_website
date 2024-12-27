<?php

namespace App\Livewire\Admin\Auth;

use App\Models\HotelOwner;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AdminRegister extends Component
{

    use LivewireAlert;


    public $email;


    public $password;

    public $password_confirmation;


    public function createAccount()
    {
        $attributes = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed|max:255',
        ]);

        $user = User::where('email', '=', $this->email)->first();


        if (empty($user)) {
            $this->alert('error', 'Please Create account first before creating admin account');


            return redirect(route('register'));
        }

        HotelOwner::create(['user_id' => $user->id, 'email' => $this->email, 'password' => $this->password]);

        $user->update(['is_hotel_owner' => true]);

        $this->alert('success', 'Successfully created hotel owner account');


    }

    public function render()
    {
        return view('livewire.admin.auth.admin-register')
            ->layout('components/layouts/admin_auth');
    }
}
