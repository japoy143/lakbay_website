<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminCustomersPage extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-customers-page')
            ->layout('components/layouts/admin');
    }
}
