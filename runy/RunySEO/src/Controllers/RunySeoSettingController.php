<?php

namespace RunySEO\Controllers;

use App\Http\Controllers\Controller;
use RunySEO\Models\RunySeoSetting;

class RunySeoSettingController extends Controller
{
    public function index()
    {
        $seo_public = RunySeoSetting::query()->find(1);
        //dd($seo_public);
        return view('RunySEOView::indexSEO' , compact('seo_public'));
    }

    public function save()
    {

    }
}
