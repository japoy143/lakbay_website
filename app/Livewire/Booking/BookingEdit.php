<?php

namespace App\Livewire\Booking;

use App\Models\Booking;
use App\Models\Hotels;
use Livewire\Component;

class BookingEdit extends Component
{

    public Hotels $hotel;

    public $customer_name;


    public $location;

    public $phone_number;

    public $payment_method;


    public $guests;

    public $total_payment;

    public $checkin_date;

    public $checkout_date;

    public function mount(Booking $booking)
    {
        $this->hotel = $booking->hotels;
        $this->customer_name = $booking->customer_name;
        $this->location = $booking->location;
        $this->phone_number = $booking->phone_number;
        $this->payment_method = $booking->payment_method;
        $this->guests = $booking->guests;
        $this->total_payment = $booking->total_payment;
        $this->checkin_date = $booking->checkin_date;
        $this->checkout_date = $booking->checkout_date; 
    }


    public function render()
    {
        return view('livewire.booking.booking-edit')
            ->layout('components/layouts/admin');
    }
}
