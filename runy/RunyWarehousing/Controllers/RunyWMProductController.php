<?php

namespace RunyWarehousing\Controllers;

use App\Http\Controllers\Controller;

class RunyWMProductController extends Controller
{
    public function index()
    {
        return view('RunyWarehousingView::product-management.products-management');
    }

    public function create()
    {
        return view('RunyWarehousingView::product-management.products-management');
    }
}
