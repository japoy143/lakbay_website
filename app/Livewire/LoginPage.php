<?php

namespace App\Livewire;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;



class LoginPage extends Component
{

    public $email;

    public $password;

    public function loginUser()
    {
        $user = $this->validate([
            'email' => 'required|exists:users,email|max:255',
            'password' => 'required'
        ]);


        //reference 5:17:56
        //laracast
        //https://www.youtube.com/watch?v=SqTdHCTWqks&t=21350s
        if (!Auth::attempt($user)) {
            throw ValidationException::withMessages([
                'email' => 'sorry the credentials doesnt match'
            ]);
        }

        request()->session()->regenerate();

        return redirect(route('home'));






    }

    public function render()
    {
        return view('livewire.login-page')
            ->title('Login User');
    }
}
