<?php

namespace Cart\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public function newInvoice($subject=null , $cart_id ,$cell ,$creator_id=null ,$owner , $customer_id=null
        , $description=null , $status , $amount=null , $transaction_id=null , $invoice_number=null , $contract_rules=0 , $contract_accept_time=null
        , $pay_time=null , $inactiveTime=30 )
    {
        $newInvoice = new Invoice();
        $newInvoice->subject = $subject ;
        $newInvoice->cart_id = $cart_id ;
        $newInvoice->cell = $cell ;
        $newInvoice->creator_id = $creator_id ;
        $newInvoice->owner = $owner ;
        $newInvoice->customer_id = $customer_id ;
        $newInvoice->description = $description ;
        $newInvoice->status = $status ;
        $newInvoice->amount = $amount ;
        $newInvoice->transaction_id = $transaction_id ;
        $newInvoice->invoice_number = $invoice_number ;
        $newInvoice->contract_rules = $contract_rules ;
        $newInvoice->contract_accept_time = $contract_accept_time ;
        $newInvoice->pay_time = $pay_time ;
        $newInvoice->inactiveTime = $inactiveTime ;
        $newInvoice->save() ;

        return $newInvoice ;
    }
}
