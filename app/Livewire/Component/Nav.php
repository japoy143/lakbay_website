<?php

namespace App\Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Nav extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.component.nav');
    }
}
