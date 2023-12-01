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
        $title = 'سبد خرید';
        $description = 'سبد خرید';
        $breadcrumbs = ["/"=>" خانه " , "/cart" => "سب خرید" ];


        return view('CartView::user.showCart' ,compact('title', 'description' , 'breadcrumbs'));
    }

    public function invoice()
    {
        $cart_id = $_REQUEST['cart_id'];
        $title='صورت حساب';
        $description = '';
        $dataTable = true;
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/cart" => "سفارش ها" ];

        //dd($cart_id , $title , $breadcrumbs);

        return view('CartView::user.showInvoice' , compact( 'breadcrumbs' , 'title' , 'description' , 'dataTable','cart_id')) ;
    }
}
