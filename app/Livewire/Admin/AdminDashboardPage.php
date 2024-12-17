<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminDashboardPage extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-dashboard-page')
            ->layout('components.layouts.admin');
    }
}
