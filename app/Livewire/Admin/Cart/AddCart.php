<?php

namespace App\Livewire\Admin\Cart;

use App\Models\User;
use Customer\Models\Customer;
use Livewire\Component;

class AddCart extends Component
{
    public $cart , $name, $family, $cell , $customers , $customerSearch , $customerSelect;

    public function mount()
    {
        $this->customerSearch = null ;
        $this->customers = [];
    }
    public function render()
    {
        return view('livewire.admin.cart.add-cart');
    }

    public function customer_search()
    {
        $this->customerSelect = null ;
        if ( strlen($this->customerSearch) > 2 ){
            //dd(555);
            $this->customers = Customer::query()
                ->where('name', 'LIKE', '%' . $this->customerSearch . "%")
                ->orWhere('family', 'LIKE', '%' . $this->customerSearch . "%")
                ->orWhere('cell', 'LIKE', '%' . $this->customerSearch . "%")
                ->get();

            $this->render();
        }
    }

    public function updatedCustomerSelect()
    {
        //dd(555);
    }

    public function step1()
    {
        dd($this->customerSelect , $this->cart);
        $user = User::query()->find($this->customerSelect);
        $this->name = $user->name ;
        $this->family = $user->family ;

        $this->cart->name = $this->name ;
        $this->cart->family = $this->family ;
        $this->cart->family = $this->family ;

    }
}
