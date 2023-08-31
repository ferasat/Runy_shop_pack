<?php

namespace Product\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Taxonomy;
use FilesManager\Models\FileManager;
use Ghasedak\GhasedakApi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Product\Models\CategoryProduct;
use Product\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'محصولات';
        $description = 'مدیریت محصول';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/product" => " محصولات  "];

        $products = Product::all()->sortByDesc('id');

        return view('ProductView::indexProduct', compact('title', 'description', 'breadcrumbs', 'products'));
    }

    public function create()
    {
        $new = new Product();
        $new->name = '';
        $new->slug = rand(1, 99);
        $new->statusPublish = 'draft';
        $new->user_id = Auth::id();
        $new->price = 0;
        $new->save();

        return redirect()->to('dashboard/product/edit/' . $new->id);
    }

    public function store()
    {
        $new = new Product();
        $new->name = '';
        $new->slug = rand(1, 99);
        $new->statusPublish = 'draft';
        $new->user_id = Auth::id();
        $new->save();

        return redirect()->to('dashboard/product/edit/' . $new->id);
    }

    public function edit(Product $id)
    {
        $title = 'ویرایش ' . $id->name;
        $description = 'ویرایش محصول';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/product" => " محصولات  "];

        $ckeditor = true;
        $product = $id;

        return view('ProductView::editProduct', compact('title', 'description',
            'breadcrumbs', 'product', 'ckeditor'));
    }

    public function update(Request $request)
    {
        //dd($request->all());
        $mytime = time();
        $categoreis = CategoryProduct::all();

        $pro = Product::find($request->product_id);
        $pro->texts = $request->texts;
        $pro->shortDescription = $request->shortDescription;
        $pro->save();


        foreach ($categoreis as $category) {
            $cid = 'ch_' . $category->id;
            if (isTax_pro($category->id, $pro->id)) {
                $tax = Taxonomy::query()->where([
                    'type_id' => $pro->id,
                    'type' => 'product',
                    'item' => 'cat',
                    'item_id' => $category->id
                ])->first();
                if ($request->$cid == null){
                    $tax->is = 0;
                }else{
                    $tax->is = 1;
                }
                $tax->save();
            }else {
                if ($request->$cid == null){
                    $newTax = new Taxonomy();
                    $newTax->type = 'product';
                    $newTax->type_id = $pro->id;
                    $newTax->item = 'cat';
                    $newTax->item_id = $category->id ;
                    $newTax->is = 0;
                    $newTax->save();
                }else{
                    $newTax = new Taxonomy();
                    $newTax->type = 'product';
                    $newTax->type_id = $pro->id;
                    $newTax->item = 'cat';
                    $newTax->item_id = $category->id ;
                    $newTax->is = 1;
                    $newTax->save();
                }

            }
        }

        /*foreach ($categoreis as $cat) {
            $cid = 'ch_' . $cat->id;
            //dd($request->$cid);
            //dd(isOrNot($request->$cid , $pro->id));
            if ($cat->id == $request->$cid) {

                if (isTax_pro($request->$cid, $pro->id) == false) {
                    $newTax = new Taxonomy();
                    $newTax->type = 'product';
                    $newTax->type_id = $pro->id;
                    $newTax->item = 'cat';
                    $newTax->item_id = $cat->id;
                    $newTax->is = 1;
                    $newTax->save();
                } else {
                    foreach (catsInPro($pro->id) as $tax) {
                        if ($tax->item_id == $request->$cid) {
                            //dd($tax->id);
                            $updateTax = Taxonomy::query()->findOrFail($tax->id);
                            $updateTax->is = 1;
                            $updateTax->save();
                            //dd($updateTax);
                        } else {
                            //dd('ssd');
                            $updateTax = Taxonomy::query()->findOrFail($tax->id);
                            $updateTax->is = 0;
                            $updateTax->save();
                        }
                    }
                }

            }
        }*/


        if ($request->picture !== null) {
            $file = new FileManager();
            $file->filename = 'product';
            $file->where = 'product';
            $file->where_id = $pro->id;
            $file->user_id = Auth::id();
            $file->save();

            $filename = $file->id . '.' . $request->file('picture')->getClientOriginalExtension();
            $pathAdress = "uploads/product/" . date("Y", $mytime) . "/user_" . Auth::id();
            $request->file('picture')->move(public_path($pathAdress), $filename);
            $file->path = $pathAdress . '/' . $filename;
            $path_picture = $pathAdress . '/' . $filename;
            $file->save();

            $pro->pic = $file->path;
        }


        $pro->save();

        return back();
    }

    public function destroy(Product $id)
    {
        $id->delete();
        return back();
    }

    public function show(Product $product)
    {
        $title = $product->name;
        $description = $product->titleSeo . ' | ' . $product->focusKeyword;
        //$breadcrumbs = ["/"=>" خانه " , "/shop" => "فروشگاه", "/product/".$product->slug => $product->name ];
        $breadcrumbs = '<ul class="breadcrumb">
                            <li>
                                <a href="'.asset('/').'" title=""><span>خانه</span></a>
                            </li>
                            <li>
                                <a href="'.asset('/shop').'" title="فروشگاه"><span>فروشگاه</span></a>
                            </li>
                            <li>
                                <a href="'.asset('/product/'.$product->slug).'" title="'.$product->name.'"><span>'.$product->name.'</span></a>
                            </li>
                        </ul>';


        return view('ProductView::show', compact('product', 'title', 'description' , 'breadcrumbs'));
    }

    public function shop()
    {
        $setting = Setting::query()->first();
        $title = $setting->site_name;
        $description = $setting->site_short_description ;


        return view('ProductView::shop', compact(  'title', 'description' ));
    }

}
