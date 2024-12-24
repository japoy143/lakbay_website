<?php

namespace App\Livewire\Customers;

use App\Models\Hotels;
use Livewire\Component;

class BookHotelPage extends Component
{


    public Hotels $hotel;

    public $customer_name;


    public $location;

    public $phone_number;

    public $payment_method;


    public $guests = 1;

    public $total_payment;




    public function placebooking()
    {

        dd($this->customer_name, $this->location, $this->phone_number, $this->payment_method);
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
