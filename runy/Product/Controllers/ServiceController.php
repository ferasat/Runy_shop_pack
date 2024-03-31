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
        $service = $product ;
        if ($product->statusPublish != 'publish'){
            return redirect(route('message_show').'/?message=این مطلب قابل دسترس نیست');
        }
        $title = $service->name;
        $description = $service->titleSeo . ' | ' . $service->focusKeyword;
        $breadcrumbs = ["/"=>" خانه " , "/services" => "خدمات ماشین های اداری مرتضوی", "/service/".$service->slug => $service->name ];


        return view('ProductView::service.showService', compact('service', 'title', 'description' , 'breadcrumbs'));
    }

    public function reserve(Product $id)
    {
        $service = $id ;
        $title = 'در خواست : '.$id->name ;
        $description = 'خدمات ماشین های اداری مرتضوی';
        $breadcrumbs = ["/"=>" خانه " , "/service/reserve"=>$title ];


        return view('ProductView::service.reserveService', compact( 'title', 'description' , 'breadcrumbs' , 'service'));
    }

    public function services()
    {
        $title = 'خدمات ماشین های اداری مرتضوی';
        $description = 'خدمات ماشین های اداری مرتضوی';
        $breadcrumbs = ["/"=>" خانه " , "/services/"=>"خدمات ماشین های اداری مرتضوی" ];


        return view('ProductView::service.services', compact( 'title', 'description' , 'breadcrumbs'));
    }

    public function show_with_id(Product $id)
    {
        return redirect(asset('product/'.$id->slug));
    }


    public function index_api()
    {

    }
}
