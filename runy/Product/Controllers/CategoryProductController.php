<?php

namespace Product\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Taxonomy;
use Product\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{

    public function index()
    {
        $title = 'دستبندی محصول';
        $description= 'مدیریت دستبندی محصول';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/product" => " محصولات  ", "/dashboard/product/category" => " دستبندی محصولات  " ];

        $categoris = CategoryProduct::all()->sortByDesc('id');

        return view('ProductView::category.catsProduct' , compact('title' , 'description' , 'breadcrumbs' , 'categoris'));
    }

    public function show(CategoryProduct $category_product)
    {
        $cat= $category_product;
        $breadcrumbs = ["/"=>" خانه " , "/shop" => "فروشگاه", "/product-category/".$cat->slug => $cat->name ];
        //dd($cat);
        return view('ProductView::category.showCat' , compact('cat', 'breadcrumbs')) ;
    }
}
