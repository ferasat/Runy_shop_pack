<?php

namespace Product\Controllers;

use App\Http\Controllers\Controller;
use Product\Models\Product;

class ServiceController extends Controller
{
    public function index()
    {
        $title = 'محصولات';
        $description = 'مدیریت محصول';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/product" => " محصولات  "];

        return view('ProductView::indexServices' , compact('title' , 'breadcrumbs' , 'description'));
    }

    public function create()
    {

    }

    public function edit(Product $product)
    {

    }
}
