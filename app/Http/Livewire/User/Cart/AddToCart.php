<?php

namespace App\Http\Livewire\User\Cart;

use Livewire\Component;
use Product\Models\Product;

class AddToCart extends Component
{
    public $product;


    public function render()
    {
        return view('livewire.user.cart.add-to-cart');
    }

    public function addToCart($product_id)
    {
        // dd('yes');
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
                    "photo" => $product->pic
                ];
                session()->put('cart', $cart);
                session()->put('success_add', 'محصول به سبد خرید اضافه شد!');

                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            //   dd(session()->all());

        }



    }
    public function refreshCartDropdown()
    {
        // Use the `refresh` method to update the Livewire component.
        $this->emit('refreshCartDropdown');
    }
}
