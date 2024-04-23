<?php

namespace App\Livewire\Admin\Cart\ManualSale;

use App\Models\User;
use Cart\Models\Cart;
use Cart\Models\Invoice;
use Cart\Models\Order;
use Cart\Models\Transaction;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Product\Models\Discount;
use Product\Models\Product;
use SiteLogs\Models\SiteLogs;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Sms\Models\LimoSms;

class ManualSale extends Component
{
    #[Url(history: true)]
    public $cart_id = '';
    public $status ='step1' ,$cart, $name, $family, $cell, $customers, $customerSearch, $customerSelect
    , $services, $products, $productSearch, $serviceSearch, $orders , $qAdd=false , $customer;
    public $sum , $total_price , $discount_id, $discount_code , $badDiscount=false , $type_pay='', $type_pay_msg ;

    public function mount()
    {
        $this->customerSearch = null;
        $this->customers = [];
        $this->services = [];
        $this->products = [];
        $this->status = 'step1';
        $this->sum = 0 ;
        $this->type_pay='پرداخت حضوری';
        $this->type_pay_msg = 'پرداخت نقدی یا با کارت خوان حضوری';
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

        if ($this->type_pay == 'پرداخت حضوری'){
            $this->type_pay_msg = 'پرداخت نقدی یا با کارت خوان حضوری';
        }elseif ($this->type_pay == 'پرداخت آنلاین'){
            $this->type_pay_msg = 'برای مشتری لینک پرداخت ارسال خواهد شد و از طریق درگاه بانکی پرداخت می کند';
        }elseif ($this->type_pay == 'پرداخت اعتباری'){
            $this->type_pay_msg = 'مبلغ در دفتر حساب مشتری ذخیره می شود';
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

    #[on('update-orders')]
    public function updateOrders()
    {
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

    #[on('update-manual-cart')]
    public function update_manual_cart()
    {
        $this->cart = Cart::query()->find($this->cart->id);
        //dd($this->cart);
        $this->orders = Order::query()->where('cart_id' , $this->cart->id)->get();

        $price_cart = 0 ;
        foreach ($this->orders as $order){
            $price_cart = $price_cart + $order->sum ;
        }
        $this->cart->price = $price_cart ;
        $this->cart->total_price = $price_cart ;
        $this->cart->save();
        $this->total_price = $this->cart->total_price;
        $this->sum = $this->cart->price;
        $this->render();
    }

    public function apply()
    {
        $total = $this->cart->price ;
        $discount = Discount::query()->where('code', $this->discount_code)->first();

        if ($discount) {
            if ($discount->status === 'active' && isValidDiscount($discount)) {

                if ($discount->type == 'fixed') {
                    $this->total_price = $total - $discount->amount;
                    $this->discount_id = $discount->id;
                } elseif ($discount->type == 'percentage') {
                    $this->total_price = $total - (($discount->amount / 100) * $total);
                    $this->discount_id = $discount->id;
                }

                $this->cart->discount_id = $discount->id ;
                $this->cart->discount_type = discount_type($discount->type)  ;
                $this->cart->discount_amount = $discount->amount ;

            } else {
                $this->badDiscount = true;
            }

        } else {
            $this->badDiscount = true;
        }

        //dd(isValidDiscount($discount) , $discount , $total , $this->total_price , $this->badDiscount);

        $this->cart->total_price = $this->total_price;
        $this->cart->seller_id = Auth::id() ;
        $this->cart->save();
        $this->cart = Cart::query()->find($this->cart->id);
        $this->render();

    }

    public function saveFinal()
    {
        SiteLogs::new_Log('ثبت فروش صندوقدار', json_encode($this->cart), 'Transaction' , $this->cart->id , 'ثبت فروش' , 'json' , Auth::id());

        $invoce = Invoice::query()->where('cart_id' , $this->cart->id)->first();

        if ($invoce == null){
            $invoce = new Invoice();
            $invoce->subject = 'سبد خرید '.$this->cart->id .' برای '.$this->cart->name.' '.$this->cart->family;
            $invoce->cart_id = $this->cart->id ;
            $invoce->type = 'product&service';
            $invoce->cell = $this->cart->cell ;
            $invoce->creator_id = Auth::id() ;
            $invoce->owner = $this->cart->name.' '.$this->cart->family ;
            $invoce->customer_id = $this->customer->id ;
            $invoce->description = $this->cart->id ;
            $invoce->status = $this->type_pay ;
            $invoce->amount = $this->cart->total_price ;
            $invoce->save();
        }else {
            $invoce->subject = 'سبد خرید '.$this->cart->id .' برای '.$this->cart->name.' '.$this->cart->family;
            $invoce->cart_id = $this->cart->id ;
            $invoce->type = 'product&service';
            $invoce->cell = $this->cart->cell ;
            $invoce->creator_id = Auth::id() ;
            $invoce->owner = $this->cart->name.' '.$this->cart->family ;
            $invoce->customer_id = $this->customer->id ;
            $invoce->description = $this->cart->id ;
            $invoce->status = $this->type_pay ;
            $invoce->amount = $this->cart->total_price ;
            $invoce->save();
        }

        SiteLogs::new_Log('ثبت فروش صندوقدار', json_encode($invoce), 'invoice' , $invoce->id , 'ساخت فاکتور' , 'json' , Auth::id());

        if ($this->type_pay == 'پرداخت حضوری'){
            $newTransaction = new Transaction();
            $newTransaction->uuid = time().rand(1,999);
            $newTransaction->invoice_id = $invoce->id;
            $newTransaction->user_id = $this->customer->id;
            $newTransaction->paid = $this->cart->total_price;
            $newTransaction->amount = $this->cart->total_price;
            $newTransaction->transaction_id = $newTransaction->uuid;
            $newTransaction->get_way = $this->type_pay;
            $newTransaction->status = 10;
            $newTransaction->save();

            SiteLogs::new_Log('ثبت فروش صندوقدار', json_encode($newTransaction), 'Transaction' , $newTransaction->id , 'ساخت ترانزاکشن' , 'json' , Auth::id());

            $this->cart->acc_status = 'پرداخت حضوری';
            $this->cart->status = 'تحویل داده شد';
            $this->cart->how_to_order = 'حضوری';
            $this->cart->save();

            result_pay_on_product('پرداخت حضوری'  , $this->orders );


        }elseif ($this->type_pay == 'پرداخت آنلاین'){

            $this->cart->acc_status = 'پرداخت نشده';
            $this->cart->how_to_order = 'حضوری';
            $this->cart->save();
            LimoSms::sendPatternMessage(523 , [$invoce->owner , $invoce->id] , $this->cart->cell);

        }elseif ($this->type_pay == 'پرداخت اعتباری'){

            result_pay_on_product('پرداخت اعتباری'  , $this->orders );
        }


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
