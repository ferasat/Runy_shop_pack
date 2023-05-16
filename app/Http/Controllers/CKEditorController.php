<?php

namespace App\Http\Controllers;


use FilesManager\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        $mytime = time();
        $user_id = Auth::id();
        if($request->hasFile('upload')) {
            $filename = time().'.'. $request->file('upload')->getClientOriginalExtension();
            $pathAdress = "uploads/editor/" . date("Y", $mytime) . "/user_" . $user_id;
            $url = asset($pathAdress).'/'. $filename;
            $request->file('upload')->move(public_path($pathAdress), $filename );

            $newFile = new FileManager();
            $newFile -> filename = $filename;
            $newFile -> user_id = $user_id;
            $newFile -> where = 'post';
            $newFile -> path = $url;
            $newFile -> save();

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $msg = 'با موفقیت بارگذاری شد';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
