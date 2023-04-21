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
    foreach (Product::all() as $product) {
        if ($slug_ == $product->slug)
            return $product->slug . '-' . $product->id;
        else
            return $slug_;
    }
}

function catSlug($data)
{
    $slug_ = replaySlug($data);
    foreach (CategoryProduct::all() as $cat) {
        if ($slug_ == $cat->slug)
            return $cat->slug . '-' . $cat->id;
        else
            return $slug_;
    }
}

function recentProducts($num)
{
    $products = DB::table('products')->where('statusPublish', 'publish')->take($num)->orderBy('id', 'desc')->get();

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
    return CategoryProduct::query()->findOrFail($cat_id);
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
