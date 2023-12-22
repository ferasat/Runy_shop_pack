<?php

namespace Rqsts\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Customer\Models\Customer;
use FilesManager\Models\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Rqsts\Models\Rqsts;
use Rqsts\Models\SubRequest;

class RqstsController extends Controller
{
    public function __construct()
    {
        //$request->middleware('auth');
    }
    public function index()
    {
        if (!Auth::check()){
            return redirect('/login');
        }
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'مدیریت در خواست ها';
        $description= 'در خواست ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/rqsts/index/" => "در خواست ها" ];

        return view('RqstsView::indexRequests' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs'));
    }

    public function fix_request()
    {
        $title = 'تعمیر و سرویس آنلاین ماشین های اداری اصفهان';
        $description= 'تعمیر و سرویس آنلاین ماشین های اداری اصفهان';
        $breadcrumbs = ["/fix_request"=>" تعمیر و سرویس آنلاین ماشین های اداری اصفهان "  ];

        return view('RqstsView::fix_request' , compact( 'title' , 'description' , 'breadcrumbs'));
    }

    public function fix_request_save(Request $request)
    {
        //dd($request->cell);

        $users = User::all();
        $not_user = true ;
        foreach ($users as $user){
            if ($request->cell == $user->cell )
            {
                $not_user = false ;
                $customer_id = $user->id ;
            }
        }

        if ($not_user){
            $newUser = new User();
            $newUser->name = $request->name ;
            $newUser->family = $request->family ;
            $newUser->cell = $request->cell ;
            $newUser->address = $request->address ;
            $newUser->email = $request->cell.'@ms.ir' ;
            $newUser->password = bcrypt($request->cell) ;
            $newUser->save() ;

            $customer_id = $newUser->id ;

            $newCustomer_ = new Customer();
            $newCustomer_->name = $request->name ;
            $newCustomer_->family = $request->family ;
            $newCustomer_->cell = $request->cell ;
            $newCustomer_->address = $request->address ;
            $newCustomer_->email = $request->cell.'@ms.ir' ;
            $newCustomer_->customer_user_id = $customer_id ;
            $newCustomer_->save() ;

        }

        if (Auth::check()){
            $user_id = Auth::id();
        }else {
            $user_id = 0 ;
        }


        $newReq = new Rqsts();
        $newReq->name = $request->title ;
        $newReq->note = $request->description ;
        $newReq->for_department_id = $request->department ;
        $newReq->user_id = $customer_id ;
        $newReq->status = 'ثبت اولیه' ;
        if ($request->pic !== null){

            $mytime = time() ;

            $file = new FileManager();
            $file->filename =  'fix_rqst';
            $file->where =  'fix_rqst';
            $file->user_id = Auth::id();
            $file->save();

            $filename = $file->id . '.' . $request->file('pic')->getClientOriginalExtension();
            $pathAdress = "uploads/rqst/fix" . date("Y", $mytime) . "/user_" . $user_id;
            $request->file('pic')->move(public_path($pathAdress), $filename);
            $file->path = $pathAdress . '/' . $filename;
            $path_picture = $pathAdress . '/' . $filename;
            $file->save();

            $urlPic = $file->path;

            $newReq->files = '    {
                                        "file": [{
                                            "name":       "'.$newReq->name.'",
                                            "url":      "'.$urlPic.'"
                                        }]
                                    }';

        }
        $newReq->save() ;

        $newReq->rqs_code = rand(99,999).$newReq->id ;
        $newReq->save() ;

        return redirect(route('fix_request').'?showStatus=1&&rqs_code='.$newReq->rqs_code);

    }

    public function show(Rqsts $id)
    {
        $rqst = $id ;
        //dd($rqst);
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = $rqst->name ;
        $description= 'در خواست ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/rqsts/index/" => "در خواست ها" ];
        $editor = true ;

        return view('RqstsView::show.showRequest' , compact('html_tag_data' , 'title' , 'description'
            , 'breadcrumbs' , 'rqst' , 'editor'));
    }

    public function replay(Request $request)
    {
        //dd($request , $_REQUEST['rqst_id']);
        $new_replay = new SubRequest();
        $new_replay->text = $request->texts ;
        $new_replay->rqsts_id = $_REQUEST['rqst_id'] ;
        $new_replay->user_id = Auth::id() ;
        $new_replay->save() ;

        return redirect(asset('/dashboard/rqsts/show/'.$_REQUEST['rqst_id']));
    }
}
