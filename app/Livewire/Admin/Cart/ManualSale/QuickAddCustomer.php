<?php

namespace App\Livewire\Admin\Cart\ManualSale;

use App\Models\User;
use Cart\Models\Cart;
use Cart\Models\Order;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use SiteLogs\Models\SiteLogs;

class QuickAddCustomer extends Component
{
    public $cart , $name , $family , $cell , $customerSearch ;

    public function mount()
    {
        $this->cell = $this->customerSearch ;
    }
    public function render()
    {
        return view('livewire.admin.cart.manual-sale.quick-add-customer');
    }

    public function addCustomer()
    {
        /*dd(444);
        $this->validate([
            'name'=>'required|min:2',
            'family'=>'required|min:2',
            'cell'=>'min:9'
        ]);*/

        $newUser = User::createFastUser($this->name, $this->family, $this->cell);
        $newCustomer = Customer::createFastCustomer($this->name, $this->family, $this->cell, $newUser->id) ;
        $this->cart = Cart::createFastCart($this->name, $this->family, $this->cell, $newUser->id);

        //dd($newUser,$newCustomer,$this->cart , $this->orders );
        CustomerLog::newLog($newCustomer->id , $newUser->name.' '.$newUser->family , 'باشگاه مشتریان'
            , 'افزودن مشتری ' .$newUser->name.' '.$newUser->family , 'اطلاعات مشتری توسط '.fullName(Auth::id()).' بارگزاری شد.');
        CustomerLog::newLog($newCustomer->id , $newUser->name.' '.$newUser->family , 'سبد خرید'
            , 'اضافه شدن سبد خرید به '.$newUser->name.' '.$newUser->family , 'اضافه شدن سبد خرید به شناسه '.$this->cart->id.' به پرونده '.$newUser->name.' '.$newUser->family);

        SiteLogs::new_Log('ثبت فروش سریع' , 'ثبت فروش به نام '.$newUser->name.' '.$newUser->family , 'Cart' , $this->cart->id
            , 'ثبت فروش' , 'text' , Auth::id() , $newUser->id );

        $this->dispatch('add-customer-manual-sale' , customer_id:$newCustomer->id , cart_id:$this->cart->id );
 /*       $this->qAdd = true ;
        $this->status = 'step2';*/

    }
}
