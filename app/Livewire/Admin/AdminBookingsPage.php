<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use Livewire\Component;

class AdminBookingsPage extends Component
{
    public function render()
    {

        $bookings = Booking::all();
        return view('livewire.admin.admin-bookings-page', ['bookings' => $bookings])
            ->layout('components/layouts/admin');
    }
}
