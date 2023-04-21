<?php

namespace Employee\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'مدیریت کارمندان';
        $description= 'کارمندان';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/emp/index/" => "کارمندان" ];

        return view('EmployeeView::indexEmployee' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs'));
    }
}
