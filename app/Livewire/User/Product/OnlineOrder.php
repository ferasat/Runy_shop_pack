<?php

namespace App\Livewire\User\Product;

use Livewire\Component;

class OnlineOrder extends Component
{
    public $product;
    public $cart;

//    public function mount()
//    {
//        $this->cart = session('cart', []);
//
//    }

    public function render()
    {
        $this->cart = session()->get('cart', []);
        return view('livewire.user.product.online-order');
    }
    public function increaseQuantity($productId)
    {
        $this->cart[$productId]['quantity']++;
        session(['cart' => $this->cart]);
    }

    public function decreaseQuantity($productId)
    {
        if ($this->cart[$productId]['quantity'] > 1) {
            $this->cart[$productId]['quantity']--;
            session(['cart' => $this->cart]);
        }
    }
    public function removeFromCart($productId)
    {
        unset($this->cart[$productId]);
        session(['cart' => $this->cart]);
    }
}
