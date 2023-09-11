<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $title = 'تنظیمات';
        $description = 'تنظیمات عمومی';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/setting" => "  تنظیمات " ];
        $editor = true ;
        return view('setting.indexSetting' , compact('title','description' ,
            'breadcrumbs'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Setting $setting)
    {
        //
    }

    public function edit(Setting $setting)
    {
        //
    }


    public function update(Request $request, Setting $setting)
    {
        //
    }


    public function destroy(Setting $setting)
    {
        //
    }
}
