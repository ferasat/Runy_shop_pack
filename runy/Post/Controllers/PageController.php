<?php

namespace Post\Controllers;

use App\Http\Controllers\Controller;
use FilesManager\Models\FileManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Image;
use Post\Models\Post;
use SiteLogs\Models\SiteLogs;

class PageController extends Controller
{
    public function index()
    {
        //dd('44');
        $title = 'برگه ها';
        $description= 'مدیریت برگه ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/post" => " برگه ها " ];

        $type = 'page';

        return view('PostView::indexPosts' , compact('title' , 'description' , 'breadcrumbs' , 'type'));
    }

    public function create()
    {
        $newPost = new Post();
        $newPost -> name = 'بدون عنوان';
        $newPost -> typePost = 'page';
        $newPost -> statusPublish  = 'draft';
        $newPost -> user_id  = Auth::id();
        $newPost -> save();

        $newLog = new SiteLogs();
        $newLog->log_name = 'ایجاد برگه ';
        $newLog->description = 'کاربر ' . fullName(Auth::id()) . ' برگه ای   به ID ' . $newPost -> id . ' را ایجاد کرد';
        $newLog->type = 'page';
        $newLog->type_id = $newPost->id;
        $newLog->event = 'ایجاد';
        $newLog->causer_id = Auth::id();
        $newLog->save();

        return redirect(asset('/dashboard/page/edit/'.$newPost->id));
    }

    public function edit(Post $id)
    {
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'برگه جدید';
        $description= 'برگه جدید';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/page" => " برگه ها ", "/dashboard/page/create" => "برگه جدید" ];
        $editor = true ;

        $post = $id;


        return view( 'PostView::editPost' , compact('html_tag_data' , 'title' , 'description' ,
            'breadcrumbs', 'editor' , 'post'));
    }

    public function update(Request $request)
    {
        $mytime = time();
        $post = Post::find($request->post_id);
        $post->texts = $request->texts ;
        if ($request->pic !== null) {
            $file = new FileManager();
            $file->filename =  'post';
            $file->where =  'page';
            $file->where_id = $post->id ;
            $file->user_id = Auth::id();
            $file->save();

            $filename = $file->id . '.' . $request->file('pic')->getClientOriginalExtension();
            $pathAdress = "uploads/page/" . date("Y", $mytime) . "/user_" . Auth::id();
            $request->file('pic')->move(public_path($pathAdress), $filename);
            $file->path = $pathAdress . '/' . $filename;
            $path_picture = $pathAdress . '/' . $filename;
            $file->save();

            $post->pic = $file->path;
        }

        $post->save();
        return redirect(asset('dashboard/page/edit/'.$post->id));
    }

    public function delete(Post $id)
    {
        $type = '';
        if ($id->typePost == 'post')
            $type = 'نوشته';
        elseif ($id->typePost == 'page')
            $type = 'برگه';
        else
            $type = '';

        $newLog = new SiteLogs();
        $newLog->log_name = 'حذف ' . $type;
        $newLog->description = 'کاربر ' . fullName(Auth::id()) . ' ' . $type . '   به نام ' . $id->name . ' را حذف کرد';
        $newLog->type = $id->typePost;
        $newLog->type_id = $id->id;
        $newLog->event = 'حذف';
        $newLog->causer_id = Auth::id();
        $newLog->save();

        Post::find($id->id)->delete();
        if ($type == 'نوشته')
            return redirect(route('post.index'));
        elseif ($type == 'برگه')
            return redirect(route('page.index'));
    }

    public function clone(Post $id)
    {
        $post = new Post();
        $post->name = $id->name ;
        $post->texts = $id->texts ;
        $post->slug = $id->name.time() ;
        $post->user_id = Auth::id() ;
        $post->save();
        return redirect(asset('dashboard/page/edit/'.$post->id));
    }

    public function show(Post $post)
    {
        $title = $post->name ;
        $description= $post->titleSeo .' | '. $post->focusKeyword;
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  ", "/page/".$post->slug => $post->name ];
        $post->numberView = $post->numberView + 1 ;
        $post->save();
        $owl_carousel = true;
        $posts = Post::query()->where([
            'statusPublish' => 'publish',
            'typePost' => 'post',
        ])->orderByDesc('id')->take(8)->get();

        return view('PostView::showPost' , compact('title' , 'description' ,
            'breadcrumbs' , 'post' , 'posts'));
    }

    public function showCat()
    {

    }

    public function blog()
    {
        $title = 'مجله' ;
        $description= 'مجله آموزشی  ';
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  " ];



        return view('PostView::blogPost' , compact('title' , 'description' ,
            'breadcrumbs' ));
    }


}
