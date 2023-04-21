<?php

namespace App\Http\Livewire\Admin\Customer;

use Customer\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class AddCustomer extends Component
{
    public $name , $family , $cell , $phone , $address , $email ;
    public function render()
    {
        return view('livewire.admin.customer.add-customer');
    }

    protected $rules = [
        'name' => 'required',
        'family' => 'required',
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'family.required' => 'نام لازم هست',
    ];

    public function save()
    {
        $this->validate();

        $newCustomer = new Customer();
        $newCustomer->name = $this->name ;
        $newCustomer->family = $this->family ;
        $newCustomer->cell = $this->cell ;
        $newCustomer->phone = $this->phone ;
        $newCustomer->address = $this->address ;
        $newCustomer->email = $this->email ;
        $newCustomer->save();
        $this->reset();
        $this->emit('updateCustomers');
    }
}
