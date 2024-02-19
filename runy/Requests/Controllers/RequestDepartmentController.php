<?php

namespace Rqsts\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestDepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $title = 'مدیریت بخش ها';
        $description= 'در خواست ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/rqsts/index/" => " در خواست ها", "/dashboard/rqsts/department/index" => "بخش های در خواست ها" ];

        return view('RqstsView::department.indexDepartment' , compact( 'title' , 'description' , 'breadcrumbs'));
    }
}
