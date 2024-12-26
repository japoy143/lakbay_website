<?php

namespace App\Livewire\Admin;

use App\Models\Customer;
use Livewire\Component;

class AdminCustomersPage extends Component
{
    public $search = '';


    public function delete(Customer $customer)
    {
        $customer->delete();
    }
    public function render()
    {
        $customers = Customer::query();

        if ($this->search !== '') {
            $customers = $customers->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('email', 'like', '%' . $this->search . '%');
        }

        $customers = $customers->get();
        return view('livewire.admin.admin-customers-page', ['customers' => $customers])
            ->layout('components/layouts/admin');
    }
}
