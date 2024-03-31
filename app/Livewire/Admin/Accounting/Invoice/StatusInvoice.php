<?php

namespace App\Livewire\Admin\Accounting\Invoice;

use App\Models\Filemanager;
use App\Models\Invoice;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Limosms\Models\Limosms;
use Livewire\Component;
use SiteLogs\Models\SiteLogs;

class StatusInvoice extends Component
{
    public $reserve , $showMess=false , $btnDisableStatusAcc=false , $status_acc_cip, $pay_place, $btnDisableStatusPlay=false
    , $status_acc_accept ;

    public function mount()
    {
        $this->status_acc_cip = $this->reserve->status_acc;
        $this->pay_place = $this->reserve->pay_place;

    }

    public function render()
    {
        return view('livewire.admin.accounting.invoice.status-invoice' , [
            'invoices' => Invoice::query()->where('reservation_id' , $this->reserve->id)->get(),
            'fishFiles' => Filemanager::query()->where([
                'where'=>'cip',
                'where_id'=> $this->reserve->id,
            ])->get(),
        ]);
    }

    public function updated()
    {
        $this->showMess = false;
    }

    public function makeInvoice($re_id)
    {
        $urlPay = asset('/cip_to_payment/'.$re_id);
        $text='';

        $newSMS = new Limosms();
        $result = $newSMS->sendsms($this->reserve->cell, $text);

        $newNotfic = new Notification();
        $newNotfic->name = $this->reserve->subject;
        $newNotfic->for_user_name = $this->reserve->leaderName." ".$this->reserve->leaderFamily;
        $newNotfic->for_item = 'cip';
        $newNotfic->for_item_id = $this->reserve->id;
        $newNotfic->type = 'sms';
        $newNotfic->importance = 'normal';
        $newNotfic->description = $text;
        $newNotfic->item_communication = $this->reserve->cell;
        $newNotfic->save();

        $this->showMess = true ;
    }

    public function btn_status_acc()
    {
        $this->reserve->status_acc = $this->status_acc_cip ;
        $this->reserve->save() ;

        $newNotify = new Notification();
        $newNotify->name = 'گفتگو '. fullName(Auth::id()) ;
        $newNotify->type = 'log';
        $newNotify->importance = 'normal';
        $newNotify->description = 'تغییر وضعیت پرداخت به '.$this->status_acc_cip;
        $newNotify->user_id = Auth::id();
        $newNotify->for_item = 'cip';
        $newNotify->for_item_id = $this->reserve->id ;
        $newNotify->save();

        $newLog = new SiteLogs();
        $newLog->newLog($this->status_acc_cip , 'تغییر وضعیت پرداخت به '.$this->status_acc_cip , 'cip' , $this->reserve->id , 'تغییر وضعیت' , Auth::id() , Auth::id() );

        $this->btnDisableStatusAcc = true ;
    }

    public function savePlacePay()
    {
        if ($this->pay_place != 0){
            $this->reserve->pay_place = $this->pay_place ;
            $this->reserve->save() ;

            $newNotify = new Notification();
            $newNotify->name = 'گفتگو '. fullName(Auth::id()) ;
            $newNotify->type = 'log';
            $newNotify->importance = 'normal';
            $newNotify->description = 'تعیین مکان پرداخت به '.$this->reserve->pay_place;
            $newNotify->user_id = Auth::id();
            $newNotify->for_item = 'cip';
            $newNotify->for_item_id = $this->reserve->id ;
            $newNotify->save();

            $newLog = new SiteLogs();
            $newLog->newLog($this->reserve->pay_place , $newNotify->description , 'cip' , $this->reserve->id , 'تغییر وضعیت' , Auth::id() , Auth::id() );

            $this->btnDisableStatusPlay = true ;
        }
    }
}
