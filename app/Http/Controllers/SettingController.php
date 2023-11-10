<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use FilesManager\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function saveLogoIcon(Request $request)
    {
        //dd($request->logo , $request->file('logo')->getSize());
        $setting = Setting::query()->find(1);
        //dd($setting);
        if (isset($request->logo)){
            $logo_size = $request->file('logo')->getSize();
            $logo_extension = $request->file('logo')->getClientOriginalExtension();
            if ($request->logo != null  ) {
                $file = new FileManager();
                $file->filename =  'logo';
                $file->where =  'setting';
                $file->where_id = 1 ;
                $file->user_id = Auth::id();
                $file->save();

                $filename = $file->id . '.' . $request->file('logo')->getClientOriginalExtension();
                $pathAdress = "uploads/setting/" . date("Y", time()) . "/user_" . Auth::id();
                $request->file('logo')->move(public_path($pathAdress), $filename);
                $file->path = $pathAdress . '/' . $filename;
                $path_picture = $pathAdress . '/' . $filename;

                $file->size = $logo_size;
                $file->extension = $logo_extension;

                $file->save();

                $setting->site_logo = $file->path;

            }
        }
        if (isset($request->icon)){
            $icon_size = $request->file('icon')->getSize();
            $icon_extension = $request->file('icon')->getClientOriginalExtension();
            if ($request->icon != null  ) {
                $file = new FileManager();
                $file->filename =  'icon';
                $file->where =  'setting';
                $file->where_id = 1 ;
                $file->user_id = Auth::id();
                $file->save();

                $filename = $file->id . '.' . $request->file('icon')->getClientOriginalExtension();
                $pathAdress = "uploads/setting/" . date("Y", time()) . "/user_" . Auth::id();
                $request->file('icon')->move(public_path($pathAdress), $filename);
                $file->path = $pathAdress . '/' . $filename;
                $path_picture = $pathAdress . '/' . $filename;

                $file->size = $icon_size;
                $file->extension = $icon_extension;

                $file->save();

                $setting->site_icon = $file->path;
            }
        }
        $setting->save();

        return redirect()->route('setting.index');
    }
}
