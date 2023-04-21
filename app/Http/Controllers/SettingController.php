<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'تنظیمات';
        $description = 'تنظیمات عمومی';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/setting" => "  تنظیمات " ];
        $editor = true ;
        return view('admin.setting.indexSetting' , compact('html_tag_data','title','description' ,
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
