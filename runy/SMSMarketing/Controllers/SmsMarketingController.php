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


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(SmsMarketing $smsMarketing)
    {
        //
    }


    public function edit(SmsMarketing $smsMarketing)
    {
        //
    }


    public function update(Request $request, SmsMarketing $smsMarketing)
    {
        //
    }


    public function setting()
    {
        return view('SmsView::settingSms');
    }
}
