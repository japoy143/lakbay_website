<?php

namespace App\Livewire;

use App\Models\Customer;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class RegisterPage extends Component
{
    use LivewireAlert;

    public $name;
    public $email;

    public $password;

    public $password_confirmation;

    public $phone_number;




    public function createAccount()
    {
        //validate
        $userDetails = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone_number' => 'required|min_digits:11|max_digits:11',
            'password' => 'required|confirmed|max:255'

        ]);



        //create user account
        $user = User::create($userDetails);

        //create customer
        Customer::create(['name' => $user->name, 'user_id' => $user->id, 'email' => $user->email, 'phone_number' => $user->phone_number]);

        $this->alert('success', 'Successfully Created Account');




    }

    public function render()
    {
        return view('livewire.register-page');
    }
}
