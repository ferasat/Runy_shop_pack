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
use SiteLogs\Models\SiteLogs;

class ProductController extends Controller
{
    public function index()
    {
        $title = 'محصولات';
        $description = 'مدیریت محصول';
        $breadcrumbs = ["/dashboard" => " پیشخوان ", "/dashboard/product" => " محصولات  "];

        return view('ProductView::indexProduct', compact('title', 'description', 'breadcrumbs'));
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

        $newLog = new SiteLogs();
        $newLog->log_name = 'ایجاد محصول';
        $newLog->description = 'کاربر '.fullName(Auth::id()).'  کالا به نام '.$new->name.' را ایجاد کرد';
        $newLog->type = 'Product';
        $newLog->type_id = $new->id;
        $newLog->event = 'ایجاد';
        $newLog->causer_id = Auth::id();
        $newLog->save();

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
        $pro = Product::find($request->product_id);

        $newLog = new SiteLogs();
        $newLog->log_name = 'بروزرسانی محصول';
        $newLog->description = 'کاربر '.fullName(Auth::id()).'  کالا به نام '.$pro->name.' را بروزرسانی کرد';
        $newLog->type = 'Product';
        $newLog->type_id = $pro->id;
        $newLog->event = 'بروزرسانی';
        $newLog->causer_id = Auth::id();
        $newLog->save();

        $mytime = time();
        $categoreis = CategoryProduct::all();

        $pro = Product::find($request->product_id);
        $pro->texts = $request->texts;
        $pro->shortDescription = $request->shortDescription;
        $pro->technical_info = $request->technical_info;
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

        if ($request->picture !== null and $request->pic_update == null) {
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
        }elseif($request->pic_update != null ){
            $pro->pic = $request->pic_update ;
        }


        $pro->save();

        return back();
    }

    public function destroy(Product $id)
    {
        $newLog = new SiteLogs();
        $newLog->log_name = 'حذف کالا';
        $newLog->description = 'کاربر '.fullName(Auth::id()).'  کالا به نام '.$id->name.' را حذف کرد';
        $newLog->type = 'Product';
        $newLog->type_id = $id->id;
        $newLog->event = 'حذف';
        $newLog->causer_id = Auth::id();
        $newLog->save();
        $id->delete();
        return back();
    }

    public function show(Product $product)
    {
        $title = $product->name;
        $description = $product->titleSeo . ' | ' . $product->focusKeyword;
        $breadcrumbs = ["/"=>" خانه " , "/shop" => "فروشگاه", "/product/".$product->slug => $product->name ];
        $product->numberView = $product->numberView + 1 ;
        $product->save();


        return view('ProductView::show', compact('product', 'title', 'description' , 'breadcrumbs'));
    }

    public function shop()
    {
        $setting = Setting::query()->first();
        $title = $setting->site_name;
        $description = $setting->site_short_description ;
        $breadcrumbs = ["/"=>" خانه " , "/shop" => "فروشگاه"];

        if (isset($_REQUEST['search'])){
            $search = $_REQUEST['search'];
            return view('ProductView::shop', compact(  'title', 'description' , 'breadcrumbs' , 'search' ));
        }else{
            return view('ProductView::shop', compact(  'title', 'description' , 'breadcrumbs' ));
        }
    }

    /* --- API ---*/
    public function index_api()
    {
        $allProducts = Product::query()->orderByDesc('id')->paginate(15);
        return response()->json();
    }
    public function product_slug_api()
    {

    }
    public function product_id_api()
    {

    }
}
