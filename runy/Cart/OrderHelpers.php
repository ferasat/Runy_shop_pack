<?php

use Cart\Models\Cart;
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
