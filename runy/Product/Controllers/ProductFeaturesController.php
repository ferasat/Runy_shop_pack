<?php

namespace Product\Controllers;

use App\Http\Controllers\Controller;

class ProductFeaturesController extends Controller
{
    public function index()
    {
        $title = 'ویژگی محصولات';
        $description = 'ویژگی محصولات';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/product" => " محصولات  " , "/dashboard/product/feature/index" => "ویژگی محصولات"];

        return view('ProductView::feature.indexProductFeature' , compact('title', 'description', 'breadcrumbs') );
    }
}
