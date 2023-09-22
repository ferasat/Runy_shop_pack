<?php

namespace App\Http\Livewire\User\Cart;

use Livewire\Component;

class CartModal extends Component
{
    public $product , $showModal=false , $cart , $total;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        foreach ($this->cart as $order){
            //dd($order->pic);
        }
        //dd($this->cart);
    }

    public function render()
    {
        return view('livewire.user.cart.cart-modal');
    }
}
