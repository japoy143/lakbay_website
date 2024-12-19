<?php

namespace App\Livewire\Admin;

use App\Models\Hotels;
use Illuminate\Support\Collection;
use Livewire\Component;

class AdminHotelsPage extends Component
{

    public Collection $hotels;

    public $sort;

    public function mount()
    {
        $this->hotels = Hotels::latest()->get();
    }



    public function render()
    {

        if ($this->sort == 'oldest') {
            $this->hotels = Hotels::oldest()->get();
        } else {
            $this->hotels = Hotels::latest()->get();
        }

        return view('livewire.admin.admin-hotels-page', ['hotels' => $this->hotels])
            ->layout('components/layouts/admin');
    }
}
