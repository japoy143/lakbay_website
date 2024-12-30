<?php

namespace App\Livewire\Admin\Auth;

use App\Models\HotelOwner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Livewire\Component;

class AdminLogin extends Component
{
    use LivewireAlert;

    public $email;

    public $password;

    public function loginUser()
    {
        $attributes = $this->validate([
            'email' => 'required|email|exists:hotel_owners,email',
            'password' => 'required'
        ]);

        $hotel_owner = HotelOwner::where('email', '=', $attributes['email'])->first();

        if (empty($hotel_owner)) {
            $this->alert('error', 'Please create hotel owner account');

            return redirect(route('admin.register'));
        }


        if (Hash::check($attributes['password'], $hotel_owner['password'])) {

            Auth::login($hotel_owner->user);

            request()->session()->regenerate();

            return redirect(route('admin.dashboard'));
        } else {
            $this->alert('warning', 'Invalid Credentials');
        }


    }

    public function render()
    {
        return view('livewire.admin.auth.admin-login')
            ->layout('components/layouts/admin_auth')
            ->title('Login Admin');
    }
}
