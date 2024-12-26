<?php

namespace App\Livewire\Customers;

use App\Models\Customer;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditCustomer extends Component
{
    use LivewireAlert;
    public Customer $customer;

    public $customer_name;

    public $customer_email;

    public $customer_phone_number;

    //initialization
    public function mount(Customer $customer)
    {
        $this->customer = $customer;

        $this->customer_name = $this->customer->name;
        $this->customer_email = $this->customer->email;
        $this->customer_phone_number = $this->customer->phone_number;
    }


    public function edit()
    {
        $this->validate([
            'customer_name' => 'required|max:255',
            'customer_email' => 'required|max:255|email',
            'customer_phone_number' => 'required|min_digits:11|max_digits:11'
        ]);

        $this->customer->update(['name' => $this->customer_name, 'email' => $this->customer_email, 'phone_number' => $this->customer_phone_number]);

        $this->alert('success', 'Successfully edited customer');

        //redirect
        return redirect(route('admin.customers'));
    }



    public function render()
    {
        return view('livewire.customers.edit-customer')
            ->layout('components\layouts\admin');
    }
}
