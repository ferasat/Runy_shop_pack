<?php

namespace App\Livewire\Admin\Cart;

use Cart\Models\Cart;
use Cart\Models\Order;
use Livewire\Component;

class CartRow extends Component
{
    public $cart ;
    public function render()
    {
        $orders = Order::query()->where('cart_id' , $this->cart->id)->get();
        $count_orders = count($orders);
        return view('livewire.admin.cart.cart-row' , ['orders'=>$orders , 'count_orders'=>$count_orders]);
    }

}
