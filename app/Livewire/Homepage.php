<?php

namespace App\Livewire;

use App\Models\Hotels;
use Livewire\Attributes\Url;
use Livewire\Component;

class Homepage extends Component
{
    #[Url]
    public $search = '';

    public $sort;

    public function render()
    {
        $hotels = Hotels::query();

        if ($this->search !== '') {
            $hotels->where('hotel_name', 'like', '%' . $this->search . '%');
        }

        //sort latest to oldest
        if ($this->sort == 'oldest') {
            $hotels->oldest();
        }

        if ($this->sort == 'latest') {
            $hotels->latest();
        }


        //get all the queries
        $hotels = $hotels->get();

        return view('livewire.homepage', ['hotels' => $hotels]);
    }
}
