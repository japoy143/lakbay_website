<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminHotelsPage extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-hotels-page')
            ->layout('components/layouts/admin');
    }
}
