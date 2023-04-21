<?php

namespace App\Http\Livewire\Admin\Cart;

use Cart\Models\Cart;
use Livewire\Component;

class CartRow extends Component
{
    public $cart ;
    public function render()
    {
        return view('livewire.admin.cart.cart-row');
    }


}
