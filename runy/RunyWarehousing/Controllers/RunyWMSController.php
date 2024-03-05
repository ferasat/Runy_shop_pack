<?php

namespace RunyWarehousing\Controllers;

use App\Http\Controllers\Controller;

class RunyWMSController extends Controller
{
    public function index()
    {
        return view('RunyWarehousingView::indexWMS');
    }
}
