<?php

namespace App\Livewire\Admin\Cart;

use Cart\Models\Cart;
use Cart\Models\Order;
use Livewire\Component;

class ShowCart extends Component
{
    public $cart , $orders , $status , $showEdit=false;

    public function mount()
    {
        $this->orders = Order::query()->where('cart_id' , $this->cart->id)->get();
        $this->status = $this->cart->status ;
        //dd($orders);
    }
    public function render()
    {
        return view('livewire.admin.cart.show-cart');
    }

    public function updated()
    {
        //dd($this->cart->id);
        $cart = Cart::query()->findOrFail($this->cart->id);
        $cart -> status = $this->status ;
        $cart -> save();
    }

    public function changeToEdit()
    {
        $this->showEdit = !$this->showEdit ;
    }

/*    public function statusTCart($cart_id)
    {
        $cart = Cart::query()->findOrFail($cart_id);
        $cart -> status = 'apply';
        $cart -> save();
    }*/
}
