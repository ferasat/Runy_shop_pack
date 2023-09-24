<?php

namespace App\Livewire\Admin\Customer;

use Customer\Controllers\CustomerController;
use Customer\Models\Customer;
use Livewire\Component;

class RowCustomer extends Component
{
    public $customer;

    public function render()
    {
        return view('livewire.admin.customer.row-customer');
    }

    public function delete($customer_id)
    {
        Customer::query()->findOrFail($customer_id)->delete();
        $this->dispatch('updateCustomers');
    }
}
