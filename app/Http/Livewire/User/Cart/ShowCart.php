<?php

namespace App\Http\Livewire\User\Cart;

use Livewire\Component;

class ShowCart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session('cart', []);
    }
    public function render()
    {
        $total = 0;

        foreach ($this->cart as $id => $product) {
            $subtotal = $product['price'] * $product['quantity'];
            $this->cart[$id]['subtotal'] = $subtotal;
            $total += $subtotal;
        }
        return view('livewire.user.cart.show-cart' , ['total' => $total]);
    }
    public function removeFromCart($productId)
    {
        unset($this->cart[$productId]);
        session(['cart' => $this->cart]);
    }
    public function updateQuantity($productId, $quantity)
    {
        $this->cart[$productId]['quantity'] = $quantity;
        session(['cart' => $this->cart]);
    }
}
