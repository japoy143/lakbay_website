<?php

namespace App\Livewire\Admin\Hotel;

use App\Models\Hotels;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditHotelpage extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public Hotels $hotel;

    public $hotel_name;

    public $pricing;

    public $location;

    public $hotel_img;


    public function mount(Hotels $hotel)
    {
        $this->hotel = $hotel;
        $this->hotel_name = $hotel->hotel_name;
        $this->pricing = $hotel->pricing;
        $this->location = $hotel->location;
        $this->hotel_img = $hotel->hotel_img;

    }


    public function edit(Hotels $hotels)
    {
        if (!is_string($this->hotel_img)) {
            $imagePath = $this->hotel_img->store(path: 'Hotels');
        } else {
            $imagePath = $this->hotel_img;
        }

        $hotels->update(['hotel_name' => $this->hotel_name, 'pricing' => $this->pricing, 'location' => $this->location, 'hotel_img' => $imagePath]);

        $this->alert('success', 'Successfully Edited Hotel');

        return redirect(route('admin.hotels'));
    }


    public function render()
    {
        return view('livewire.admin.hotel.edit-hotelpage')
            ->layout('components/layouts/admin');
    }
}
