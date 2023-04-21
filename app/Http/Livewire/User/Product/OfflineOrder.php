<?php

namespace App\Http\Livewire\User\Product;

use App\Notifications\NewOrder;
use Cart\Models\Cart;
use Cart\Models\Order;
use Ghasedak\GhasedakApi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OfflineOrder extends Component
{
    public $product, $show = true, $name, $family, $cell, $note_customer = ' ', $success = '', $address, $user_id, $capacity;

    public function render()
    {
        return view('livewire.user.product.offline-order');
    }

    protected $rules = [
        'name' => 'required',
        'family' => 'required',
        'cell' => 'required',
        'note_customer' => 'max:190',
    ];

    public function sh_h()
    {
        $this->show = !$this->show;
    }

    public function save()
    {
        $this->validate();
        $newCart = new Cart();
        $newCart->name = $this->name;
        $newCart->family = $this->family;
        $newCart->cell = $this->cell;
        $newCart->note_customer = $this->note_customer;
        $newCart->address = $this->address;
        if (Auth::check()) {
            $newCart->user_id = Auth::id();
        }
        $newCart->save();

        if ($this->product->specialPrice > 1) {
            $priceF = $this->product->specialPrice;
        } else {
            $priceF = $this->product->price;
        }
        //dd($newCart->id);
        $newOrder = new Order();
        $newOrder->cart_id = $newCart->id;
        $newOrder->product_id = $this->product->id;
        $newOrder->product_name = $this->product->name;
        $newOrder->product_price = $this->product->price;
        $newOrder->product_ps_price = $this->product->specialPrice;
        $newOrder->capacity = $this->capacity;
        $newOrder->sum = ($priceF * $this->capacity);
        $newOrder->save();

        $this->success = ' سفارش شما به شماره ' . $newCart->id . ' ثبت شد. همکاران ما در اسرع وقت با شما تماس میگیرند.';
        $this->sh_h();

        //dd($newCart->cell);

        $api = new GhasedakApi('8ddae8ab83ecc56fcad9f398c61f31c24ed7994a5273b6c684f5db0b26d31344');

        $receptor = $newCart->cell;
        $type = 1;
        $template = "saveOrderCustomer";
        $param1 = $newCart->name . ' ' . $newCart->family;

        /*dd($api->Verify(
            $receptor,
            $type,
            $template,
            $param1,
        ));*/

        $api->Verify(
            $receptor,
            $type,
            $template,
            $param1,
        );


        $param2 = $this->product->name;
        $param3 = $this->capacity;
        dd($param2, $param3);
        $api->Verify(
            "09126855680",
            1,
            "saveOrderAdmin",
            $param1,
            $param2,
            $param3,
        );

        //dd($api);

    }
}
