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


    public $cod;


    public $gcash;



    public function mount(Hotels $hotel)
    {
        $this->hotel = $hotel;


    }
    public function render()
    {
        return view('livewire.customers.book-hotel-page');
    }
}
