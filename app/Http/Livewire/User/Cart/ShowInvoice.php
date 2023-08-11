<?php

namespace App\Http\Livewire\User\Cart;

use Cart\Models\Cart;
use Cart\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowInvoice extends Component
{
    public $name,$family,$email,$cellPhone,$address ;
    public function mount()
    {
        if (Auth::id())
        {
            $this->name=Auth::user()->name;
            $this->family=Auth::user()->family;
            $this->email=Auth::user()->email;
            $this->cellPhone=Auth::user()->cellPhone;
        }
        $my_carts=session('cart');
       // $firstOrder = reset($my_carts);
        //$cartId = $firstOrder['cart_id'];

      //  dd($my_carts);
    }
    public function render()
    {
        return view('livewire.user.cart.show-invoice');
    }
    public function order()
    {
        if (Auth::id())
        {
            $user=Auth::user();
            $cart=new Cart();
            $cart->name=$user->name;
            $cart->family=$user->family;
            $cart->cell=$this->cellPhone;
            $cart->address=$this->address;
            $cart->user_id=$user->id;
            $cart->save();
            foreach (session('cart') as $product){

                $order=new Order();
                $order->cart_id=$cart->id;
                $order->product_id=$product['product_id'];
                $order->product_name=$product['name'];
                $order->product_price=$product['price'];
                $order->quantity=$product['quantity'];
                $order->sum=$product['subtotal'];
                $order->save();
            }
        }else{
            dd('kj');
        }
    }
}
