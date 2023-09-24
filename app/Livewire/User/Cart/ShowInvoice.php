<?php

namespace App\Livewire\User\Cart;

use Cart\Models\Cart;
use Cart\Models\Invoice;
use Cart\Models\Order;
use Ghasedak\GhasedakApi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowInvoice extends Component
{
    public $name,$family,$email,$cellPhone,$address,$cart_id ,$cart,$orders;
    public function mount()
    {
        if (Auth::id())
        {
            $this->name=Auth::user()->name;
            $this->family=Auth::user()->family;
            $this->email=Auth::user()->email;
            $this->cellPhone=Auth::user()->cellPhone;
        }

        $this->cart=Cart::query()->find($this->cart_id);
        $this->orders=Order::query()->where('cart_id',$this->cart_id)->get();



    }
    public function render()
    {
        return view('livewire.user.cart.show-invoice');
    }
    public function pay_invoice()
    {

        $invoice=new Invoice();
        $invoice->status=1;
        $invoice->contract_rules=1;
        //$invoice->amount=$this->cart->discounted_total_price;
        $invoice->amount=7000;
        $invoice->save();
        return redirect()->route('pay.invoice');

    }
}
