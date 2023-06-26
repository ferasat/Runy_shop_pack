<?php

namespace RunySEO\Controllers;

use App\Http\Controllers\Controller;

class RunySeoSettingController extends Controller
{
    public function index()
    {
        return view('RunySEOView::indexSEO');
    }
}
