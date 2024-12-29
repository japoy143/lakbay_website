<?php

namespace App\Livewire\Booking;

use App\Models\Booking;
use App\Models\Hotels;
use Livewire\Component;

class BookingEdit extends Component
{

    public Hotels $hotel;

    public $booking_id;

    public $customer_name;


    public $location;

    public $phone_number;

    public $payment_method;


    public $days;

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
        $this->days = $booking->days;
        $this->total_payment = $booking->total_payment;
        $this->checkin_date = $booking->checkin_date;
        $this->checkout_date = $booking->checkout_date;
        $this->booking_id = $booking->id;
    }

    public function editBooking(Booking $booking)
    {
        $booking->update(['checkin_date' => $this->checkin_date, 'checkout_date' => $this->checkout_date, 'customer_name' => $this->customer_name, 'location' => $this->location, 'phone_number' => $this->phone_number, 'payment_method' => $this->payment_method, 'days' => $this->days, 'total_payment' => $this->total_payment]);
        return redirect(route('admin.bookings'));
    }

    public function render()
    {
        return view('livewire.booking.booking-edit')
            ->layout('components/layouts/admin');
    }
}
