<?php

namespace Sms\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SmsMarketing;
use Illuminate\Http\Request;

class SmsMarketingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function setting()
    {
        return view('SmsView::settingSms');
    }
}
