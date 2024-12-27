<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{

    public function logout()
    {
        Auth::logout();

        return redirect(route('admin.login'));
    }

    public function render()
    {
        return view('livewire.admin.auth.logout');
    }
}
