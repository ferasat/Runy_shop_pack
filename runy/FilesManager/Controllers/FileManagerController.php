<?php

namespace FilesManager\Controllers;

use App\Http\Controllers\Controller;
use FilesManager\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileManagerController extends Controller
{
    public function index()
    {
        $backOfficeRoute = true;
        return view('FilesManagerView::indexFiles' , compact('backOfficeRoute'));
    }

    public function upload(Request $request)
    {
        //dd($request);

        if ($request->file !== null ) {
            $file = new FileManager();
            $file->filename = 'file';
            $file->where = 'file manager';
            $file->description = $request->description;
            $file->user_id = Auth::id();
            $file->save();

            $filename = $request->file('file')->getClientOriginalName().'-'. $file->id . '.' . $request->file('file')->getClientOriginalExtension();
            $pathAdress = "uploads/files/" . date("Y", time()) . "/user_" . Auth::id();
            $request->file('file')->move(public_path($pathAdress), $filename);
            $file->path = $pathAdress . '/' . $filename;
            $file->filename = $filename;
            $file->extension = $request->file('file')->getClientOriginalExtension();
            $file->save();
        }

        return redirect(route('files.index'));
        //return $file ;
    }
}
