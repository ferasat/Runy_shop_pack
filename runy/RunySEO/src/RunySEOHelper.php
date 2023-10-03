<?php

use RunySEO\Models\RunySeoMeta;
use RunySEO\Models\RunySeoSetting;

function seo_info()
{
    return RunySeoSetting::query()->find(1);
}

function make_product_meta($item)
{
    $json = '
          "@context": "https://www.schema.org",
          "@type": "Product",
          "name": "' . $item->name . '",
          "image": [
            "https://0bbdade20b5a67292051183a5857697909def9ec_1620476741.jpg",
            "https://758a6230ec9cd10ba08472afa36b8bd5dae79d4a_1620476808.jpg",
            "https://b2398d611a45d1116793264138e332e0fb477ccc_1620476870.jpg"
          ],
          "description": "' . $item->description . '",
          "mpn": ' . $item->id . ',
          "sku": ' . $item->id . ',
          "category": "http://127.0.0.1:8012/types/2",
          "brand": {
            "@type": "Brand",
            "name": "شاتراستوک",
            "url": "http://127.0.0.1:8012/types/2",
            "@id": "http://127.0.0.1:8012/types/2"
          },
          "offers": {
            "@type": "Offer",
            "priceCurrency": "IRR",
            "price": 497000,
            "itemCondition": "https://schema.org/NewCondition",
            "availability": "https://schema.org/InStock"
          }
        }
        ';
}

function make_BreadcrumbList()
{
    $context = '
    {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "' . seo_info()->name_home_page . '",
        "item": {
          "@type": "Corporation",
          "@id": "' . asset('/') . '"
        }
      }
    ]
  }
    ';
    // dd($context);
    return $context;
}

function runySeoItemShwo($item_id, $type_return)
{
    $seo = RunySeoMeta::query()->where([
        'post_type' => 'Product',
        'post_type_id' => $item_id,
        'type' => 'Product'
    ])->first();

    $catBreadcrumbList = RunySeoMeta::query()->where([
        'post_type' => 'Product',
        'post_type_id' => $item_id,
        'type' => 'BreadcrumbList'
    ])->get();

    $catBreadcrumbList_json = '';
    foreach ($catBreadcrumbList as $item) {
        $catBreadcrumbList_json = $catBreadcrumbList_json . $item->schema_context;
    }


    if ($type_return == 'Product')
        return $seo->schema_context;
    else
        return $catBreadcrumbList_json;
}
function runySeoTypeShwo($type_id, $type_return)
{
    $seo = RunySeoMeta::query()->where([
        'post_type' => 'cat',
        'post_type_id' => $type_id,
        'type' => 'CategoryCodeSet'
    ])->first();

    $catBreadcrumbList = RunySeoMeta::query()->where([
        'post_type' => 'cat',
        'post_type_id' => $type_id,
        'type' => 'BreadcrumbList'
    ])->get();

    $catBreadcrumbList_json = '';
    foreach ($catBreadcrumbList as $item) {
        $catBreadcrumbList_json = $catBreadcrumbList_json . $item->schema_context;
    }

    if ($type_return == 'cat')
        return $seo->schema_context;
    else
        return $catBreadcrumbList_json;
}

function runySeoInfoType($type_id , $type)
{
    ///dd($type_id , $type);
    if ($type == 'cat'){
        $seo = RunySeoMeta::query()->where([
            'post_type' => 'cat',
            'post_type_id' => $type_id,
            'type' => 'CategoryCodeSet'
        ])->first();
    }else {
        $seo = RunySeoMeta::query()->where([
            'post_type' => 'Product',
            'post_type_id' => $type_id,
            'type' => 'Product'
        ])->first();
    }

    return $seo ;
}

/*function slug($type, $slug, $name = null, $item_id = null)
{
    if ($type == 'item') {
        $tags = \App\Models\item::query()->whereNotIn('id' , [$item_id])->get();
        //dd($tags);
        foreach ($tags as $tag) {
            if ($tag->slug == $slug) {
                $_slug = $slug . '_' . time();
                return $_slug;
            } else {
                $_slug = $slug;
            }

        }
    } elseif ($type == 'type') {
        if (isset($slug)) {
            $hotels = \App\Models\type::query()->whereNotIn('id' , [$item_id])->get();;
            $arrySlug = explode(" ", $slug);
            $slug = implode("-", $arrySlug);
            foreach ($hotels as $hotel) {
                if ($hotel->slug == $slug and $hotel->id !== $item_id) {
                    $slug = $slug . '-2';
                }
            }
        } else {
            if (isset($name)) {
                $arrySlug = explode(" ", $name);
            } else {
                $arrySlug = explode(" ", $name);
            }
            $slug = implode("-", $arrySlug);
        }

        $_slug = $slug;

    }

    if (isset($_slug) == null)
        return time();
    else return $_slug;
}*/
