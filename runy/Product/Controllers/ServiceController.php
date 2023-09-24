<?php

namespace Product\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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

        dd($id);
        $ckeditor = true;

        return view('ProductView::service.editService', compact('title', 'description',
            'breadcrumbs', 'service', 'ckeditor'));
    }

    public function update(Request $request)
    {

    }
}
