<?php

use Cart\Models\Cart;
use Cart\Models\Order;
use Product\Models\Product;

function infoCart($id)
{
    return Cart::find($id);
}

function statusCart($status)
{
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
        return 'رسیدگی شد';
    } else {
        return 'اطلاعی نیست';
    }
}

function orders_in_cart($cart_id)
{
    return Order::where('cart_id', $cart_id)->get();
}

