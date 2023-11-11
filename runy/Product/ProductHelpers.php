<?php

use App\Models\Taxonomy;
use Illuminate\Support\Facades\DB;
use Product\Models\CategoryProduct;
use Product\Models\Product;

function replaySlug($data)
{
    return str_replace(" ", "-", $data);
    // $title = str_slug("Laravel 5 Framework", "-"); برای ساخت اردس
}

function productSlug($data)
{
    $slug_ = replaySlug($data);
    $use_product_slug = Product::query()->where('slug' , $slug_)->first();
    if ($use_product_slug)
        return $use_product_slug->slug.'-'.$use_product_slug->id.'-'.rand(1,999);
    else
        return $slug_ ;

}

function catSlug($data)
{
    $slug_ = replaySlug($data);

    $use_slug = CategoryProduct::query()->where('slug' , $slug_)->first();
    if ($use_slug)
        return $use_slug->slug.'-'.$use_slug->id.'-'.rand(1,999) ;
    else
        return $slug_ ;

}

function recentProducts($num)
{
    $products = DB::table('products')->where([
        'statusPublish' => 'publish',
        'formatProduct' => 'normal',
    ])->take($num)->orderBy('id', 'desc')->get();

    return $products;
}

function infoProduct($id)
{
    return Product::find($id);
}

function statusProduct($data)
{
    if ($data == 'forCheck')
        return 'برای بررسی';
    elseif ($data == 'draft')
        return 'پیش نویس';
    elseif ($data == 'publish')
        return 'منتشر شده';
    else return 'اطلاعی نیست';
}

function subCats($cat_id)
{
    if ($cat_id !== 0)
        return CategoryProduct::where('master_id', $cat_id)->get();
    else return null;
}

function infoCatPro($cat_id)
{
    return CategoryProduct::query()->find($cat_id);
}

function catsInPro($pro_id) // دستبندی هایی که در این محصول هستند
{

    $taxs = Taxonomy::query()->where([
        'type_id' => $pro_id,
        'type' => 'product',
        'item' => 'cat',
        'is' => '1',
    ])->get();


    if (sizeof($taxs) > 0) {
        return $taxs;
    } else {
        return null;  /// در این محصول این دستبندی نیست
    }
}

function catsInProLink($pro_id) // دستبندی هایی که در این محصول هستند
{

    $taxs = Taxonomy::query()->where([
        'type_id' => $pro_id,
        'type' => 'product',
        'item' => 'cat',
        'is' => '1',
    ])->get();


    if (sizeof($taxs) > 0) {
        $categoris = '';
        foreach ($taxs as $cat){
            $categoris = $categoris . '<a target="_blank" title="'.$cat->name.'" href="'.asset('/product/cat/').$cat->slug.'">'.$cat->name.'</a>';
        }
        return $categoris;
    } else {
        return null;  /// در این محصول این دستبندی نیست
    }
}

function count_sub_cats($cat_id){
    $cats = CategoryProduct::query()->where('master_id' , $cat_id)->get();
    return count($cats);
}

function sub_cats($cat_id){
    return CategoryProduct::query()->where('master_id' , $cat_id)->get();
}

function isOrNot_pro($cat_id, $pro_id)
{
    $tax_is = DB::table('taxonomies')->where([
        'type_id' => $pro_id,
        'type' => 'product',
        'item_id' => $cat_id
    ])->first();

    if ($tax_is !== null){
        if ($tax_is->is == null){
            return false ;
        } elseif($tax_is->is == 0) {
            return false ;
        }else {
            return true ;
        }
    }else {
        return false ;
    }
}

function isTax_pro($cat_id, $pro_id)
{
    $tax_is = Taxonomy::query()->where([
        'type_id' => $pro_id,
        'type' => 'product',
        'item_id' => $cat_id
    ])->first();

    if ($tax_is !== null) {
        return true;
    } else {
        return false;
    }
}
function off_percent($price , $spPrice)
{
    if (isset($spPrice) and $spPrice > 0)
        return round(100 - ($spPrice*100)/$price) ;
    else return 0 ;
}

function current_pay($unit){
    if ($unit == 'T')
        return 'تومان';
    elseif ($unit == 'R')
        return 'ریال';
    elseif ($unit == '$')
        return 'دلار';
    elseif ($unit == 'AED')
        return 'درهم';
    elseif ($unit == '€')
        return 'یورو';
}

function isValidDiscount($discount)
{
    $now = now();
    if ($discount->type == 'percentage' || $discount->type == 'fixed') {
        if ($discount->status == 'active') {
            if ($discount->capacity != null && $discount->capacity <= 0) {
                return false;
            }

            if ($discount->duration == 'date') {
                return ($now->gte($discount->start_date) && $now->lte($discount->end_date));
            } elseif ($discount->duration == 'time') {

                return ($now->gte($discount->start_time) && $now->lte($discount->end_time));
            }

            return false;
        }
    }

    return false;
}
