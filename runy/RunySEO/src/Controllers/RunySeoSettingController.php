<?php

namespace RunySEO\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use RunySEO\Models\RunySeoSetting;

class RunySeoSettingController extends Controller
{
    public function index()
    {
        $seo_public = RunySeoSetting::query()->find(1);
        //dd($seo_public);
        return view('RunySEOView::indexSEO' , compact('seo_public'));
    }

    public function save(Request $request)
    {
        //dd($request->all());
        $setting = RunySeoSetting::query()->find(1);
        $setting->site_name = $request->site_name ;
        $setting->name_home_page = $request->name_home_page ;
        $setting->description_home_page = $request->description_home_page ;
        $setting->keyword_home_page = $request->keyword_home_page ;
        $setting->site_scripts = $request->site_scripts ;
        $setting->save();

        return back();
    }
}
