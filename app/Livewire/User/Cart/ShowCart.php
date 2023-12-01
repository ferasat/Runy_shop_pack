<?php

namespace App\Livewire\User\Cart;

use Cart\Models\Cart;
use Cart\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Product\Models\Discount;


class ShowCart extends Component
{
    public $cart, $code, $badDiscount = false, $dis = 0, $discount_id;

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
        $this->dispatch('rendercart');
    }

    public function updateQuantity($productId, $quantity)
    {
        $this->cart[$productId]['quantity'] = $quantity;
        session(['cart' => $this->cart]);
        $this->dispatch('rendercart');
    }

    public function increaseQuantity($productId)
    {
        $this->cart[$productId]['quantity']++;
        session(['cart' => $this->cart]);
        $this->dispatch('rendercart');
    }

    public function decreaseQuantity($productId)
    {
        if ($this->cart[$productId]['quantity'] > 1) {
            $this->cart[$productId]['quantity']--;
            session(['cart' => $this->cart]);
        }
        $this->dispatch('rendercart');
    }

    public function apply($total)
    {

        $discount = Discount::query()->where('code', $this->code)->first();
        if ($discount) {
            if ($discount->status === 'active' && isValidDiscount($discount)) {
                if ($discount->type == 'fixed') {
                    $this->dis = $total - $discount->amount;
                    $this->discount_id = $discount->id;
                } elseif ($discount->type == 'percentage') {
                    $this->dis = $total - (($discount->amount / 100) * $total);
                    $this->discount_id = $discount->id;
                }
            } else {

                $this->badDiscount = true;
            }

        } else {

            $this->badDiscount = true;
        }
        $this->dispatch('rendercart');
    }

    public function checkout($total)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->family = $user->family;
            $cart->cell = $user->cellPhone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            if ($this->dis > 0) {
                $cart->discounted_total_price = $this->dis;
            }
            $cart->total_price = $total;
            $cart->discount_id = $this->discount_id;
            $cart->save();
        } else {
            $cart = new Cart();
            if ($this->dis > 0) {
                $cart->discounted_total_price = $this->dis;
            }
            $cart->total_price = $total;
            $cart->discount_id = $this->discount_id;
            $cart->save();
        }
        foreach (session('cart') as $product) {

            $order = new Order();
            $order->cart_id = $cart->id;
            $order->product_id = $product['product_id'];
            $order->product_name = $product['name'];
            $order->product_price = $product['price'];
            $order->quantity = $product['quantity'];
            $order->sum = $product['subtotal'];
            $order->save();
        }
//dd(route('invoice') . '?cart_id=' . $cart->id);
        return $this->redirect(route('invoice') . '?cart_id=' . $cart->id);

    }
}
