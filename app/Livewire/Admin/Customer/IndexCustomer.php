<?php

namespace App\Livewire\Admin\Customer;

use Customer\Models\Customer;
use Livewire\Component;

class IndexCustomer extends Component
{
    public $show ;
    protected $listeners =[
        'updateCustomers' => 'render',
    ];
    public function render()
    {
        $customers = Customer::query()->orderBy('id' , 'desc')->paginate(30);
        return view('livewire.admin.customer.index-customer' , compact('customers'));
    }


}
