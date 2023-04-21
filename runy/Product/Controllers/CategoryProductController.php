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
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'دستبندی محصول';
        $description= 'مدیریت دستبندی محصول';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/product" => " محصولات  ", "/dashboard/product/category" => " دستبندی محصولات  " ];

        $categoris = CategoryProduct::all()->sortByDesc('id');

        return view('ProductView::category.catsProduct' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs' , 'categoris'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function edit(CategoryProduct $categoryProduct)
    {
        //
    }


    public function update(Request $request, CategoryProduct $categoryProduct)
    {
        //
    }


    public function destroy(CategoryProduct $categoryProduct)
    {
        //
    }

    ///

    public function products_in_cat(CategoryProduct $id)
    {

    }

    public function show(CategoryProduct $category_product)
    {
        $cat= $category_product;
        //dd($cat);
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $breadcrumbs = ["/"=>" خانه " , "/product" => " محصولات  ", "/product/category" => " دستبندی محصولات  " ];

        return view('ProductView::category.showCat' , compact('cat', 'html_tag_data' , 'breadcrumbs')) ;
    }
}
