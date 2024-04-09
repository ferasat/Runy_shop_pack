<?php

namespace App\Livewire\Admin\Cart;

use Cart\Models\Cart;
use Cart\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use SiteLogs\Models\SiteLogs;
use Sms\Models\LimoSms;

class ShowCart extends Component
{
    public $cart , $orders , $status , $showEdit=false , $notifyToCustomer=true , $logsCart , $msg_sms_status='' , $deactivateBtnStatus=false;

    public function mount()
    {
        $this->orders = Order::query()->where('cart_id' , $this->cart->id)->get();
        $this->status = $this->cart->status ;
        $this->logsCart = SiteLogs::query()->where([
            'type'=>'Cart',
            'type_id'=>$this->cart->id
        ])->orderByDesc('id')->get();
        //dd($orders);
    }
    public function render()
    {
        return view('livewire.admin.cart.show-cart');
    }



    public function changeToEdit()
    {
        $this->showEdit = !$this->showEdit ;
    }

    public function saveStatus()
    {
        $this->deactivateBtnStatus = true ;
        $cart = Cart::query()->findOrFail($this->cart->id);
        $cart -> status = $this->status ;
        $cart -> save();
        if ($this->notifyToCustomer){
            $sendPattern = LimoSms::sendPatternMessage(499 , [$cart->name.' '.$cart->family , statusCart($this->status)] , $cart->cell );
            SiteLogs::new_Log('تغییروضعیت سفارش به '.statusCart($this->status) , json_encode($sendPattern) ,
                'Cart' , $cart->id , 'تغییروضعیت' , 'json' , Auth::id() );

            $this->logsCart = SiteLogs::query()->where([
                'type'=>'Cart',
                'type_id'=>$this->cart->id
            ])->orderByDesc('id')->get();

            if (isset($sendPattern->message)){
                $this->msg_sms_status = $sendPattern->message ;
            }

        }else{
            SiteLogs::new_Log('تغییروضعیت' , 'تغییروضعیت سفارش به '.statusCart($this->status) ,
                'Cart' , $cart->id , statusCart($this->status) , 'text' , Auth::id() );

            $this->logsCart = SiteLogs::query()->where([
                'type'=>'Cart',
                'type_id'=>$this->cart->id
            ])->orderByDesc('id')->get();
        }

        $this->deactivateBtnStatus = false ;
        $this->render();
    }

/*    public function statusTCart($cart_id)
    {
        $cart = Cart::query()->findOrFail($cart_id);
        $cart -> status = 'apply';
        $cart -> save();
    }*/
}
