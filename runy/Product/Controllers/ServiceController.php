<?php

namespace Product\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Taxonomy;
use FilesManager\Models\FileManager;
use Illuminate\Support\Facades\Auth;
use Product\Models\CategoryProduct;
use Product\Models\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $title = 'خدمات';
        $description = 'مدیریت خدمات';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/service" => " خدمات  "];

        return view('ProductView::service.indexServices' , compact('title' , 'breadcrumbs' , 'description'));
    }

    public function create()
    {
        $new = new Product();
        $new->name = '';
        $new->slug = rand(1, 99).time();
        $new->statusPublish = 'draft';
        $new->user_id = Auth::id();
        $new->price = 0;
        $new->formatProduct = 'service';
        $new->save();

        return redirect()->to('dashboard/service/edit/'.$new->id);
    }

    public function edit(Product $id)
    {
        $title = 'ویرایش ' . $id->name;
        $description = 'ویرایش خدمات';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/product" => " خدمات  "];

        //dd($id);
        $service = $id;
        $ckeditor = true;

        return view('ProductView::service.editService', compact('title', 'description',
            'breadcrumbs', 'service', 'ckeditor'));
    }

    public function update(Request $request)
    {
        $mytime = time();

        $pro = Product::query()->find($request->service_id);

        $pro->shortDescription = $request->shortDescription;
        $pro->texts = $request->texts;

        $pro->save();

        if ($request->picture !== null) {
            $file = new FileManager();
            $file->filename = 'service';
            $file->where = 'service';
            $file->where_id = $pro->id;
            $file->user_id = Auth::id();
            $file->save();

            $filename = $file->id . '.' . $request->file('picture')->getClientOriginalExtension();
            $pathAdress = "uploads/service/" . date("Y", $mytime) . "/user_" . Auth::id();
            $request->file('picture')->move(public_path($pathAdress), $filename);
            $file->path = $pathAdress . '/' . $filename;
            $path_picture = $pathAdress . '/' . $filename;
            $file->save();

            $pro->pic = $file->path;
        }


        $pro->save();

        return back();

    }

    public function show(Product $product)
    {
        $title = $product->name;
        $description = $product->titleSeo . ' | ' . $product->focusKeyword;

        $breadcrumbs = ["/" => "خانه ", "/service" => $product->name ];


        return view('ProductView::show', compact('product', 'title', 'description' , 'breadcrumbs'));
    }
}
