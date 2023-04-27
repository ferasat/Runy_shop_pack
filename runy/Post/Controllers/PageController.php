<?php

namespace Post\Controllers;

use App\Http\Controllers\Controller;
use FilesManager\Models\FileManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Image;
use Post\Models\Post;

class PageController extends Controller
{
    public function index()
    {
        //dd('44');
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'برگه ها';
        $description= 'مدیریت برگه ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/post" => " برگه ها " ];

        $type = 'page';

        return view('PostView::indexPosts' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs' , 'type'));
    }

    public function create()
    {
        $newPost = new Post();
        $newPost -> name = 'بدون عنوان';
        $newPost -> typePost = 'page';
        $newPost -> statusPublish  = 'draft';
        $newPost -> user_id  = Auth::id();
        $newPost -> save();

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
        Post::find($id->id)->delete();
        return redirect(route('post.index'));
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
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = $post->name ;
        $description= $post->titleSeo .' | '. $post->focusKeyword;
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  ", "/post/".$post->slug => $post->name ];



        return view('PostView::showPost' , compact('html_tag_data' , 'title' , 'description' ,
            'breadcrumbs' , 'post'));
    }

    public function showCat()
    {

    }

    public function blog()
    {
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'مجله' ;
        $description= 'مجله آموزشی هیدروجم ';
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  " ];



        return view('PostView::blogPost' , compact('html_tag_data' , 'title' , 'description' ,
            'breadcrumbs' ));
    }


}
