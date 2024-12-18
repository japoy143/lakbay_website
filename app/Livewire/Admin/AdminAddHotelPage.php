<?php

namespace App\Livewire\Admin;

use App\Models\Hotels;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddHotelPage extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $hotel_name;

    public $location;

    public $pricing = 0;

    public $hotel_img;


    public function save()
    {

        $attributes = $this->validate([
            'hotel_name' => 'required|max:255',
            'location' => 'required|max:255',
            'pricing' => 'required|max:255',
            'hotel_img' => 'required|image'
        ]);


        $imagePath = $this->hotel_img->store(path: 'Hotels');

        $attributes['hotel_img'] = $imagePath;

        Hotels::create($attributes);

        $this->alert('success', 'Added Hotel');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.admin-add-hotel-page')
            ->layout('components/layouts/admin');
    }
}
