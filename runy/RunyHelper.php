<?php

use App\Models\OptionalSettings;
use App\Models\Setting;
use App\Models\User;
use Cart\Models\Cart;
use Ghasedak\GhasedakApi;
use Illuminate\Support\Facades\Auth;
use Rqsts\Models\RequestDepartment;

function is_admin($user_id)
{

}

function menu_access()
{
    if (Auth::check()) {
        if (Auth::user()->levelPermission == 1) { // Customer
            return 1;
        } elseif (Auth::user()->levelPermission == 2) { // Employee
            return 2;
        } elseif (2 < Auth::user()->levelPermission and Auth::user()->levelPermission <= 6) {  // between Employee and Acc
            return 26;
        } elseif (6 < Auth::user()->levelPermission) { // Admin
            return 'admin';
        } else {
            return false;
        }
    } else return false;

}

function is_admin_menu()
{
    if (Auth::user()->role == 'Admin') {
        return true;
    } else {
        return false;
    }
}

function fullName($id)
{
    $user = User::find($id);
    if ($user == null) {
        $full = 'بدون نام';
    } else {
        $full = $user->name . ' ' . $user->family;
    }
    return $full;
}

function smsApi()
{
    return new GhasedakApi(env('8ddae8ab83ecc56fcad9f398c61f31c24ed7994a5273b6c684f5db0b26d31344'));
}

function smsSend($order)
{
    var_dump($order->cart_id);
    $cart = Cart::find('id', $order->cart_id);
    dd($cart);
    $api = smsApi();
    $api->Verify(
        $cart->cell, // receptor
        1,             // 1 for text message and 2 for voice message
        "saveOrderCustomer", // name of the template which you've created in you account
        $cart->name . ' ' . $cart->family,      // parameters (supporting up to 10 parameters)
    );

}

function setting_site()
{
    return Setting::query()->find(1);
}

function get_department_name($id)
{
    $department = RequestDepartment::query()->find($id);
    if ($department !== null)
        return $department->name;
    else return 'این بخش وجود ندارد';
}

function is_api_access ($type_user){
    if ($type_user == 'Company' or $type_user == 'UserCompany' )
        return false ;
    else return true ;
}

function role_name($role){
    if ($role == 'Support'){
        return 'پشتیبان';
    }elseif ($role == 'Admin'){
        return 'مدیریت';
    }elseif ($role == 'Editor'){
        return 'ویرایشگر';
    }elseif ($role == 'SEO'){
        return 'SEO';
    }elseif ($role == 'Employee'){
        return 'کارمند';
    }elseif ($role == 'Seller'){
        return 'فروشنده';
    }elseif ($role == 'Customer'){
        return 'مشتری';
    }else{
        return 'بدون نقش';
    }
}

/// برای شمارش ورودی
function countUserViews($number) {

}
function text_summary($text , $count=120){
    $text = strip_tags($text);
    $text = mb_convert_encoding($text , 'UTF-8', 'UTF-8');
    return substr($text , 0 , $count);
}

function to_english_numbers(String $string): String {
    $persinaDigits1 = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $persinaDigits2 = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];
    $allPersianDigits = array_merge($persinaDigits1, $persinaDigits2);
    $replaces = [...range(0, 9), ...range(0, 9)];

    return str_replace($allPersianDigits, $replaces , $string);
}
