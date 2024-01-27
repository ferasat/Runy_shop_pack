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
        $api = new GhasedakApi('01b0b9662b2eeafb88e875a4ec39d7d3096dc85c8fa4f99c19074d92ab13a70d');
        $api->SendSimple(
            $phone,          // receptor
            $this->msg,  // message
            "10008642"      // choose a line number from your account
        );
    }
}
