<?php

namespace App\Livewire\User\Cart;

use Cart\Models\Cart;
use Cart\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Product\Models\Product;

class AddToCart extends Component
{
    public $product,$showModal=false,$cart;
    public function render()
    {
        ////feri////
        $totalQuantity = 0;

        $this->cart = session()->get('cart', []);
        $total = 0;

        foreach ($this->cart as $id => $product) {
            $subtotal = $product['price'] * $product['quantity'];
            $this->cart[$id]['subtotal'] = $subtotal;
            $total += $subtotal;
            $totalQuantity += $product['quantity'];
        }

        session(['cart' => $this->cart]);

        return view('livewire.user.cart.add-to-cart');
    }

    public function addToCart($product_id)
    {


        $product = Product::find($product_id);

        if ($product->specialPrice > 1) {
            $priceProduct = $product->specialPrice;
        } else {
            $priceProduct = $product->price;
        }

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');


        if (!$cart) {
            $cart = [
                'order-' . $product_id => [
                    "product_id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $priceProduct,
                    "pic" => $product->pic
                ]
            ];
            session()->put('cart', $cart);

            session()->put('success_add', 'محصول به سبد خرید اضافه شد!');


        } else {
            if (isset($cart['order-' . $product_id])) {
                $cart['order-' . $product_id]['quantity']++;
                session()->put('cart', $cart);
                session()->put('success_add', 'محصول به سبد خرید اضافه شد!');
                //return redirect()->back()->with('success', 'Product added to cart successfully!');
            } else {
                // if item not exist in cart then add to cart with quantity = 1
                $cart['order-' . $product_id] = [
                    "product_id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $priceProduct,
                    "pic" => $product->pic
                ];

                session()->put('cart', $cart);
                session()->put('success_add', 'محصول به سبد خرید اضافه شد!');

               // return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            //   dd(session()->all());

        }


        //dd($totalQuantity);


        $this->showModal=true;
        $this->dispatch('rendercart');

    }

    public function hiddenModal()
    {
        $this->showModal = false ;
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
    public function removeFromCart($productId)
    {

        unset($this->cart[$productId]);
        session(['cart' => $this->cart]);
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
            $cart->total_price = $total;
            $cart->save();
        }else{
            $cart = new Cart();
            $cart->total_price = $total;
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


        return $this->redirect(route('invoice').'?cart_id='.$cart->id);

    }
}
