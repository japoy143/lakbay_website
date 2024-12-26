<?php

namespace App\Livewire\Admin\Auth;

use Livewire\Component;

class AdminLogin extends Component
{


    public $email;

    public $password;

    public function loginUser()
    {
        dd($this->email, $this->password);
    }

    public function render()
    {
        return view('livewire.admin.auth.admin-login')
            ->layout('components/layouts/admin_auth');
    }
}
