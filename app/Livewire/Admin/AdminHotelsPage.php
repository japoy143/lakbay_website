<?php

namespace App\Livewire\Admin;

use App\Models\Hotels;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;

class AdminHotelsPage extends Component
{



    public $sort;

    #[Url]
    public $search = '';

    //re render
    #[On('update-hotels')]
    public function render()
    {
        $hotels = Hotels::query();

        if ($this->search != '') {
            $hotels->where('hotel_name', 'LIKE', "%" . $this->search . "%");
        }

        if ($this->sort == 'oldest') {
            $hotels->oldest();
        } else {
            $hotels->latest();
        }


        $hotels = $hotels->get();


        return view('livewire.admin.admin-hotels-page', ['hotels' => $hotels])
            ->layout('components/layouts/admin');
    }
}
