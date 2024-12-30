<?php

namespace App\Livewire\Admin;

use App\Models\Booking;
use Livewire\Component;

class AdminBookingsPage extends Component
{

    public $search = '';



    //delete booking
    public function deleteBooking(Booking $booking)
    {
        $booking->delete();
    }


    //paid
    public function paid(Booking $booking)
    {
        $booking->update(['is_paid' => true]);
    }


    public function render()
    {

        $bookings = Booking::query();

        //if search box is not empty
        //will search in different columns not only the customer name column
        if ($this->search !== '') {
            $bookings->where('customer_name', 'like', '%' . $this->search . '%')
                ->orWhere('location', 'like', '%' . $this->search . '%');
        }

        $bookings = $bookings->get();

        return view('livewire.admin.admin-bookings-page', ['bookings' => $bookings])
            ->layout('components/layouts/admin')
            ->title('Admin Bookings');
    }
}
