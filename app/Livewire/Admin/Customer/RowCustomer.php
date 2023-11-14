<?php

namespace App\Livewire\Admin\Customer;

use Customer\Controllers\CustomerController;
use Customer\Models\Customer;
use Ghasedak\GhasedakApi;
use Livewire\Component;

class RowCustomer extends Component
{
    public $customer,$msg;

    public function render()
    {
        return view('livewire.admin.customer.row-customer');
    }

    public function delete($customer_id)
    {
        Customer::query()->findOrFail($customer_id)->delete();
        $this->dispatch('updateCustomers');
    }
    public function sendSmsToCustomer()
    {
       // dd($this->customer);
        $phone=$this->customer->cell;
        $api = new GhasedakApi('b267a45bc4bccbbabe99555396023340c9e8e174116fdd1f33a68a63c5835efd');
        $api->SendSimple(
            $phone,          // receptor
            $this->msg,  // message
            "300002525"      // choose a line number from your account
        );
    }
}
