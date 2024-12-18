<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminBookingsPage extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-bookings-page')
            ->layout('components/layouts/admin');
    }
}
