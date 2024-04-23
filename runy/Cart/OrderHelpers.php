<?php

use Cart\Models\Cart;
use Cart\Models\Invoice;
use Cart\Models\Order;
use Product\Models\Product;
use Rqsts\Models\Rqsts;

function infoCart($id)
{
    return Cart::find($id);
}

function statusCart($status)
{
    /// 1- 'in_process' 2- 'being_packaged'  3- 'ready_to_send' 4-
    if ($status == 'in_process') {
        return 'در حال پردازش';
    } elseif ($status == 'در حال بستبندی') {
        return 'در حال بستبندی';
    } elseif ($status == 'آماده ارسال') {
        return 'آماده ارسال';
    } elseif ($status == 'ارسال شده') {
        return 'ارسال شده';
    } elseif ($status == 'تحویل داده شد') {
        return 'تحویل داده شد';
    } elseif ($status == 'برگشت خورده') {
        return 'برگشت خورده';
    } elseif ($status == 'ثبت سفارش') {
        return 'ثبت سفارش';
    } elseif ($status == 'پرداخت موفق') {
        return 'پرداخت موفق';
    } elseif ($status == 'نقص در اطلاعات') {
        return 'نقص در اطلاعات';
    } elseif ($status == 'موجود نبودن کالا') {
        return 'موجود نبودن کالا';
    } elseif ($status == 'apply') {
        return 'رسیدگی شد'; // برای خدمات
    } else {
        return 'اطلاعی نیست';
    }
}
function statusCartColor($status)
{
    /// 1- 'in_process' 2- 'being_packaged'  3- 'ready_to_send' 4-
    if ($status == 'in_process') {
        return 'bg-runy-inprocess-low';
    } elseif ($status == 'ثبت سفارش') {
        return 'bg-runy-inprocess';
    } elseif ($status == 'در حال بستبندی') {
        return 'bg-runy-inprocess-low';
    } elseif ($status == 'آماده ارسال') {
        return 'bg-runy-inprocess';
    } elseif ($status == 'ارسال شده') {
        return 'bg-runy-success';
    } elseif ($status == 'تحویل داده شد') {
        return 'bg-runy-success-high';
    } elseif ($status == 'برگشت خورده') {
        return 'bg-runy-danger-low';
    } elseif ($status == 'پرداخت موفق') {
        return 'bg-runy-success-low';
    } elseif ($status == 'نقص در اطلاعات') {
        return 'bg-runy-danger-low';
    } elseif ($status == 'موجود نبودن کالا') {
        return 'bg-runy-danger';
    } elseif ($status == 'apply') {
        return 'bg-runy-success-high'; // برای خدمات
    } else {
        return 'bg-runy-primary';
    }
}

function orders_in_cart($cart_id)
{
    return Order::where('cart_id', $cart_id)->get();
}

function runy_transaction_status($way , $status){
    if ($way == 'idpay'){
        return idpayStatus($status);
    }
}

function idpayStatus ($status){
    if ($status == 10)
        return 'موفق';
    elseif ($status == 1)
        return 'پرداخت انجام نشده';
    elseif ($status == 2)
        return 'پرداخت ناموفق';
    elseif ($status == 3)
        return 'خطا رخ داده';
    elseif ($status == 6)
        return 'برگشت خورده سیستمی';
    elseif ($status == 7)
        return 'انصراف از پرداخت';
    else return 'تعریف نشده';
}

function cart_to_rqst ($cart_id){
    $rqst = Rqsts::query()->where('cart_id' , $cart_id)->first();
    if ($rqst == null){
        return 0 ;
    }else{
        return $rqst->id;
    }
}

function cart_to_text ($cart){
    $cart_text = 'Cart ID:'.$cart->id.' | session_id:'. $cart->session_id.' | name:'. $cart->name.' | family:'. $cart->family.' | cell:'. $cart->cell.' | note_customer:'.
        $cart->note_customer.' | address:'. $cart->address.' | zip_code:'. $cart->zip_code.' | discount_id:'. $cart->discount_id.' | type_cart:'. $cart->type_cart.' | user_id:'.
        $cart->user_id.' | status:'. $cart->status.' | price:'. $cart->price.' | total_price:'. $cart->total_price.' | acc_status:'. $cart->acc_status.' | ';
    return $cart_text ;
}

function order_to_text ($order){
    $order_text = 'Order ID:'.$order->id.' | cart_id:'.$order->cart_id.' | session_id:'.$order->session_id.' | product_id:'.
        $order->product_id.' | product_name:'.$order->product_name.' | product_format:'.$order->product_format.' | product_price:'.
        $order->product_price.' | product_ps_price:'.$order->product_ps_price.' | capacity:'.$order->capacity.' | quantity:'.
        $order->quantity.' | sum:'.$order->sum.' | benefit:'.$order->benefit;
    return $order_text ;
}


function invoice_info_owner($invoice_id){
    $invoice = Invoice::query()->find($invoice_id);
    //dd($invoice);
    if ($invoice != null){
        return [ 'owner'=>$invoice->owner , 'cart_id'=>$invoice->cart_id ] ;
    }else {
        return null;
    }
}
 function result_pay_on_product($status  , $Orders){

    if ($status == 'پرداخت موفق' or $status == 'پرداخت حضوری' or $status == 'پرداخت اعتباری'){
        return true ;
    }else{
        return false ;
    }
 }
