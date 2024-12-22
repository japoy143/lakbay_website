<?php

namespace App\Livewire\Admin\Components;

use App\Models\Hotels;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Boolean;

class HotelCard extends Component
{

    public Hotels $hotel;

    public bool $is_admin = false;

    public function mount($hotel)
    {
        $this->hotel = $hotel;
    }


    public function delete(Hotels $hotel)
    {

        $this->dispatch('update-hotels');
        $hotel->delete();
    }




    public function render()
    {
        return view('livewire.admin.components.hotel-card');
    }
}
