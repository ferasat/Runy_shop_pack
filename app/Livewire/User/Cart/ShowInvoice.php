<?php

namespace App\Livewire\User\Cart;

use Cart\Models\Cart;
use Cart\Models\Invoice;
use Cart\Models\Order;
use Ghasedak\GhasedakApi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use SiteLogs\Models\SiteLogs;

class ShowInvoice extends Component
{
    public $name, $family, $email, $cellPhone, $address, $cart_id, $cart, $orders;

    public function mount()
    {

        if (Auth::check()) {
            $user = Auth::user();
            $this->name = $user->name;
            $this->family = $user->family;
            $this->email = $user->email;
            $this->cellPhone = $user->cellPhone;
            $this->zip_code = $user->zip_code;
        }/* else {
            return $this->redirect(asset('/login'));
        }*/

        $this->cart = Cart::query()->find($this->cart_id);
        $this->orders = Order::query()->where('cart_id', $this->cart_id)->get();


    }

    public function render()
    {
        return view('livewire.user.cart.show-invoice');
    }

    public function pay_invoice()
    {
        //dd($this->cart);
        $this->validate([
           'name' => 'min:2',
           'family' => 'min:2',
           'cellPhone' => 'min:9'
        ]);


        $this->cart->name = $this->name ;
        $this->cart->family = $this->family ;
        $this->cart->cell = $this->cellPhone ;
        $this->cart->address = $this->address ;
        $this->cart->save() ;

        $invoice = new Invoice();
        $invoice->status = 1;
        $invoice->contract_rules = 1;
        //$invoice->amount=$this->cart->discounted_total_price;
        $invoice->amount = $this->cart->total_price;
        $invoice->save();
        $newLog = new SiteLogs();
        $newLog->new_Log('فاکتور '.$invoice->id , 'رفتن به درگاه به نام '.$this->name.' '.$this->family ,
            'فاکتور' , $invoice->id , 'رفتن به درگاه' );

        return redirect(asset('/pay_invoice/'.$invoice->id));

    }
}
