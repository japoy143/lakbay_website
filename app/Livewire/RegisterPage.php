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




    public function createAccount()
    {
        //validate
        $userDetails = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|max:255'
        ]);



        //create user account
        $user = User::create($userDetails);

        //create customer
        Customer::create(['name' => $this->name, 'user_id' => $user->id]);

        $this->alert('success', 'Successfully Created Account');




    }

    public function render()
    {
        return view('livewire.register-page');
    }
}
