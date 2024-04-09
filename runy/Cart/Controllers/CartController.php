<?php

namespace Cart\Controllers;

use App\Http\Controllers\Controller;
use Cart\Models\Cart;
use Cart\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SiteLogs\Models\SiteLogs;

class CartController extends Controller
{

    public function index()
    {

        $title = 'سفارش ها';
        $description = '';
        $dataTable = true;
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/carts" => "سفارش ها"];

        return view('CartView::indexCarts', compact('breadcrumbs', 'title', 'description', 'dataTable'));
    }

    public function create()
    {
        $newCart = new Cart();
        $newCart->name = '';
        $newCart->family = '';
        $newCart->cell = '';
        $newCart->save();

        return redirect(asset('/dashboard/cart/edit/' . $newCart->id));
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
        return view('CartView::admin.addCart', compact('cart'));
    }


    /// برای فروش شناور
    public function manualSale()
    {
        return view('CartView::admin.manualSale.manual_sale');
    }


    public function destroy($cart_id)
    {
        $cart = Cart::query()->findOrFail($cart_id);
        $orders = Order::query()->where('cart_id', $cart_id)->get();

        $newLog = new SiteLogs();
        $newLog->new_Log('پاک کردن سبد خرید مشتری', json_encode($cart), 'cart', $cart_id, 'حذف', 'json' , Auth::id() );

        $cart->delete();

        foreach ($orders as $order){
            $newLog = new SiteLogs();
            $newLog->new_Log('پاک کردن سفارش مشتری', json_encode($order), 'order', $order->id, 'حذف', 'json' ,  Auth::id());

            $order->delete();
        }

        return back();
    }

    /// For Customer
    public function my_cart()
    {
        $title = 'سبد خرید';
        $description = 'سبد خرید';
        $breadcrumbs = ["/" => " خانه ", "/cart" => "سب خرید"];


        return view('CartView::user.showCart', compact('title', 'description', 'breadcrumbs'));
    }

    public function invoice()
    {
        $cart_id = $_REQUEST['cart_id'];
        $title = 'صورت حساب';
        $description = '';
        $dataTable = true;
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/cart" => "سفارش ها"];

        //dd($cart_id , $title , $breadcrumbs);

        return view('CartView::user.showInvoice', compact('breadcrumbs', 'title', 'description', 'dataTable', 'cart_id'));
    }
}
