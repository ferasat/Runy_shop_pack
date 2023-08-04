<?php

namespace Cart\Controllers;

use App\Http\Controllers\Controller;
use Cart\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {

        $title = 'سفارش ها';
        $description = '';
        $dataTable = true;
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/carts" => "سفارش ها" ];

        return view('CartView::indexCarts' , compact( 'html_tag_data' , 'breadcrumbs' , 'title' , 'description' , 'dataTable')) ;
    }

    public function create()
    {
        $newCart = new Cart();
        $newCart -> name = '';
        $newCart -> family = '';
        $newCart -> cell = '';
        $newCart -> save();

        return redirect(asset('/dashboard/cart/edit/'.$newCart->id));
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Cart $cart)
    {
        dd($cart);
    }

    public function edit(Cart $cart)
    {
        dd($cart);
    }

    public function update(Request $request, Cart $cart)
    {
        //
    }


    public function destroy($cart_id)
    {
        Cart::query()->findOrFail($cart_id)->delete();
        return back();
    }

    /// For Customer
    public function my_cart()
    {
        $title = 'kjj';
        $description = 'kk' . ' | ' . 'kkj';
        //$breadcrumbs = ["/"=>" خانه " , "/shop" => "فروشگاه", "/product/".$product->slug => $product->name ];
        $breadcrumbs = '<ul class="breadcrumb">
                            <li>
                                <a href="'.asset('/').'" title=""><span>خانه</span></a>
                            </li>
                            <li>
                                <a href="'.asset('/cart').'" title="فروشگاه"><span>فروشگاه</span></a>
                            </li>
                            <li>
                                <a href="'.asset('/cart').'" title="j"><span>j</span></a>
                            </li>
                        </ul>';


        return view('CartView::user.showCart' ,compact('title', 'description' , 'breadcrumbs'));
    }
}
