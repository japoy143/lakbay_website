<?php

namespace App\Livewire\Customers;

use App\Models\Booking;
use App\Models\Hotels;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class BookHotelPage extends Component
{
    use LivewireAlert;

    public Hotels $hotel;

    public $customer_name;


    public $location;

    public $phone_number;

    public $payment_method;


    public $guests = 1;

    public $total_payment;

    public $checkin_date;

    public $checkout_date;



    public function placebooking()
    {



        //validate
        $attributes = $this->validate([
            'customer_name' => 'required',
            'location' => 'required',
            'phone_number' => 'required|min_digits:11|max_digits:11',
            'payment_method' => 'required',
            'guests' => 'required',
            'total_payment' => 'required',
            'checkin_date' => 'required',
            'checkout_date' => 'required'
        ]);

        $attributes['hotels_id'] = $this->hotel->id;
        $attributes['customer_id'] = Auth::user()->customer->id;

        //book customer
        Booking::create($attributes);

        $this->alert('success', 'Successfully Book Hotel');

        //redirect
        return redirect('/');

    }



    public function mount(Hotels $hotel)
    {

        $this->hotel = $hotel;
        $this->total_payment = $this->guests * $this->hotel->pricing;

    }
    public function render()
    {

        if ($this->guests > 1) {
            $this->total_payment = $this->guests * $this->hotel->pricing;
        }

        return view('livewire.customers.book-hotel-page');
    }
}
