<?php

namespace Cart\Controllers;

use App\Http\Controllers\Api\V1\BaseController;
use Cart\Models\Cart;
use Cart\Resources\V1\CartResource;


class CartApiController extends BaseController
{
    /* ---- Version 1 API ---- */
    public function index()
    {
        $carts = Cart::query()->orderByDesc('id')->paginate(2);
        return CartResource::collection($carts);
    }

    public function my_cart()
    {

        $carts = Cart::query()->orderByDesc('id')->paginate(2);
        return CartResource::collection($carts);
    }

}
