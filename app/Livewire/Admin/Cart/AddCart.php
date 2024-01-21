<?php

namespace App\Livewire\Admin\Cart;

use App\Models\User;
use Cart\Models\Order;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Livewire\Component;
use Product\Models\Product;

class AddCart extends Component
{
    public $cart, $name, $family, $cell, $customers, $customerSearch, $customerSelect, $status
    , $services, $products, $productSearch, $serviceSearch, $orders;

    public function mount()
    {
        $this->customerSearch = null;
        $this->customers = [];
        $this->services = [];
        $this->products = [];
        $this->status = 'step1';
        $this->orders = Order::query()->where('cart_id', $this->cart->id)->get();
    }

    public function render()
    {
        return view('livewire.admin.cart.add-cart');
    }

    public function customer_search()
    {
        $this->customerSelect = null;
        if (strlen($this->customerSearch) > 2) {
            //dd(555);
            $this->customers = Customer::query()
                ->where('name', 'LIKE', '%' . $this->customerSearch . "%")
                ->orWhere('family', 'LIKE', '%' . $this->customerSearch . "%")
                ->orWhere('cell', 'LIKE', '%' . $this->customerSearch . "%")
                ->get();

            $this->render();
        }
    }

    public function updatedCustomerSelect()
    {
        //dd(555);
    }

    public function step1()
    {
        $user = Customer::query()->find($this->customerSelect);
        $this->name = $user->name;
        $this->family = $user->family;
        $this->cell = $user->cell;

        $this->cart->name = $this->name;
        $this->cart->family = $this->family;
        $this->cart->cell = $this->cell;
        $this->cart->save();


        $this->status = 'step2';

    }

    public function product_search()
    {
        if (strlen($this->productSearch) > 2) {
            $this->products = Product::query()
                ->where('formatProduct', 'normal')
                ->where('name', 'LIKE', '%' . $this->productSearch . "%")
                ->get();
            $this->render();
        }
    }

    public function service_search()
    {
        if (strlen($this->serviceSearch) > 2) {
            $this->services = Product::query()
                ->where('formatProduct', 'service')
                ->where('name', 'LIKE', '%' . $this->serviceSearch . "%")
                ->get();
            $this->render();
        }
    }

    public function addServiceToCart($service_id)
    {
        $service = Product::query()->find($service_id);
        if (count($this->orders) != 0) {

            $check_order = Order::query()->where([
                'product_id'=> $service_id,
                'cart_id'=>$this->cart->id
            ])->first();

            if ($check_order != null ) {
                $check_order->quantity = $check_order->quantity + 1;
                $check_order->save();
            } else {
                $newOrder = new Order();
                $newOrder->cart_id = $this->cart->id;
                $newOrder->quantity = 1;
                $newOrder->product_id = $service_id;
                $newOrder->product_name = $service->name;
                $newOrder->product_price = $service->price;
                $newOrder->product_ps_price = $service->specialPrice;
                $newOrder->save();
            }

        } else {
            $newOrder = new Order();
            $newOrder->cart_id = $this->cart->id;
            $newOrder->quantity = 1;
            $newOrder->product_id = $service_id;
            $newOrder->product_name = $service->name;
            $newOrder->product_price = $service->price;
            $newOrder->product_ps_price = $service->specialPrice;
            $newOrder->save();
        }

        $this->orders = Order::query()->where('cart_id', $this->cart->id)->get();
        $this->render();
    }

    public function addProductToCart($product_id)
    {
        $product = Product::query()->find($product_id);
        if (count($this->orders) != 0) {

            $check_order = Order::query()->where([
                'product_id'=> $product_id,
                'cart_id'=>$this->cart->id
            ])->first();

            if ($check_order != null ) {
                $check_order->quantity = $check_order->quantity + 1;
                $check_order->save();
            } else {
                $newOrder = new Order();
                $newOrder->cart_id = $this->cart->id;
                $newOrder->quantity = 1;
                $newOrder->product_id = $product_id;
                $newOrder->product_name = $product->name;
                $newOrder->product_price = $product->price;
                $newOrder->product_ps_price = $product->specialPrice;
                $newOrder->save();
            }

        } else {
            $newOrder = new Order();
            $newOrder->cart_id = $this->cart->id;
            $newOrder->quantity = 1;
            $newOrder->product_id = $product_id;
            $newOrder->product_name = $product->name;
            $newOrder->product_price = $product->price;
            $newOrder->product_ps_price = $product->specialPrice;
            $newOrder->save();
        }


        $this->orders = Order::query()->where('cart_id', $this->cart->id)->get();
        $this->render();
    }

    public function deleteOrder($order_id)
    {
        Order::query()->find($order_id)->delete();
        $this->orders = Order::query()->where('cart_id', $this->cart->id)->get();
        $this->render();
    }

    public function step2()
    {
        $customer = Customer::query()->find($this->customerSelect);
        $user = User::query()->find($customer->customer_user_id);
        $this->orders = Order::query()->where('cart_id' , $this->cart->id)->get();
        $price_final = 0 ;
        foreach ($this->orders as $order){
            if ($order->product_ps_price < $order->product_price ){
                $price_final = $price_final + $order->product_ps_price ;
            }else {
                $price_final = $price_final + $order->product_price ;
            }
        }
        $this->cart->total_price = $price_final ;
        $this->cart->user_id = $user->id ;
        $this->cart->save();

        $newCustomerLog = new CustomerLog();
        $newCustomerLog->customer_id = $this->customerSelect;
        $newCustomerLog->full_name = $this->cart->name.' '.$this->cart->family;
        $newCustomerLog->department = 'سبد خرید';
        $newCustomerLog->log_subject = 'اضافه شدن سبد خرید به '.$newCustomerLog->full_name;
        $newCustomerLog->note = 'اضافه شدن سبد خرید به شناسه '.$this->cart->id.' به پرونده '.$newCustomerLog->full_name;
        $newCustomerLog->date = verta();
        $newCustomerLog->save();

        $this->status = 'step3'; // final
    }
}
