<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use App\Models\Hotels;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminDashboardPage extends Component
{

    public $total_hotels;

    public $total_bookings;

    public function mount()
    {
        $hotel_owner_id = Auth::user()->hotel_owner->id;
        $this->total_hotels = count(Hotels::where('hotel_owner_id', '=', $hotel_owner_id)->get());

        $all_bookings = Booking::all();

        $booking_count = 0;

        foreach ($all_bookings as $booking) {
            if ($booking->hotels->hotel_owner_id === $hotel_owner_id) {
                $booking_count++;
            }
        }

        $this->total_bookings = $booking_count;


    }

    public function render()
    {
        return view('livewire.admin.admin-dashboard-page')
            ->layout('components/layouts/admin')
            ->title('Admin Dashboard');

    }
}
