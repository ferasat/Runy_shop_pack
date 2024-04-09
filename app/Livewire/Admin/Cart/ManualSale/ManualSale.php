<?php

namespace App\Livewire\Admin\Cart\ManualSale;

use App\Models\User;
use Cart\Models\Cart;
use Cart\Models\Order;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Product\Models\Product;
use SiteLogs\Models\SiteLogs;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;

class ManualSale extends Component
{
    #[Url(history: true)]
    public $cart_id = '';
    public $status ='step1' ,$cart, $name, $family, $cell, $customers, $customerSearch, $customerSelect
    , $services, $products, $productSearch, $serviceSearch, $orders , $qAdd=false , $customer;
    public $sum ;

    public function mount()
    {
        $this->customerSearch = null;
        $this->customers = [];
        $this->services = [];
        $this->products = [];
        $this->status = 'step1';
        $this->sum = 0 ;
    }
    public function render()
    {
        return view('livewire.admin.cart.manual-sale.manual-sale');
    }

    public function updated()
    {
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

    #[On('add-customer-manual-sale')]
    public function qAddCustomer($cart_id, $customer_id)
    {
        $this->customer = Customer::query()->find($customer_id);
        $this->cart = Cart::query()->find($cart_id);
        $this->cart_id = $cart_id ;
        $this->qAdd = true;
        $this->step1();
    }
    public function step1()
    {
        if ($this->qAdd == false){
            $this->customer = Customer::query()->find($this->customerSelect);
            $this->cart = Cart::createFastCart($this->customer->name, $this->customer->family, $this->customer->cell, $this->customer->customer_user_id);
        }
        $this->orders = Order::query()->where('cart_id', $this->cart->id)->get();
        $this->status = 'step2';
        $this->render();
    }

    public function step2()
    {
        $user = User::query()->find($this->customer->customer_user_id);
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

    #[on('update-manual-cart')]
    public function update_manual_cart()
    {
        $this->cart = Cart::query()->find($this->cart->id);
        //dd($this->cart);
        $this->orders = Order::query()->where('cart_id' , $this->cart->id)->get();

        $this->sum = 0 ;
        foreach ($this->orders as $order){
            if ($order->product_ps_price > 1 ){
                $this->sum = $this->sum + $order->product_price ;
            }else{
                $this->sum = $this->sum + $order->product_ps_price ;
            }
        }
        $this->render();
    }
}
