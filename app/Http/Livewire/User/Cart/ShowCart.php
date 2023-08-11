<?php

namespace App\Http\Livewire\User\Cart;

use Cart\Models\Order;
use Illuminate\Support\Facades\Auth;
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

        session(['cart' => $this->cart]);

        return view('livewire.user.cart.show-cart', ['total' => $total]);
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

    public function invoice()
    {
        return $this->redirect(route('invoice'));
    }
}
