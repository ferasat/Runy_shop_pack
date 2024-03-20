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
    } elseif ($status == 'being_packaged') {
        return 'در حال بستبندی';
    } elseif ($status == 'ready_to_send') {
        return 'آماده ارسال';
    } elseif ($status == 'posted') {
        return 'ارسال شده';
    } elseif ($status == 'delivered') {
        return 'تحویل داده شده';
    } elseif ($status == 'returned') {
        return 'برگشت خورده';
    }  elseif ($status == 'پرداخت موفق') {
        return 'پرداخت موفق';
    } elseif ($status == 'defective_information') {
        return 'نقص در اطلاعات';
    } elseif ($status == 'lack_of_goods') {
        return 'موجود نبودن کالا';
    } elseif ($status == 'apply') {
        return 'رسیدگی شد'; // برای خدمات
    } else {
        return 'اطلاعی نیست';
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


function invoice_info($invoice_id){
    $invoice = Invoice::query()->find($invoice_id);
    dd($invoice , $invoice_id);
    return $invoice;
}
 function result_pay_on_product($status  , $Orders){

 }
