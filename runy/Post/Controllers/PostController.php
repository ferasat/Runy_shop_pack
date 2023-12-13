<?php


namespace Post\Controllers;

use FilesManager\Models\FileManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Image;
use Post\Models\Post;

class PostController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        //dd('44');
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'نوشته ها';
        $description= 'مدیریت نوشته ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/post" => " نوشته ها " ];

        $type = 'post';

        return view('PostView::indexPosts' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs' , 'type'));
    }

    public function index_page()
    {
        //dd('44');
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'برگه ها';
        $description= 'مدیریت برگه ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/page" => " برگه ها " ];

        $type = 'page';

        return view('PostView::indexPosts' , compact('html_tag_data' , 'title' , 'description' , 'breadcrumbs' , 'type'));
    }

    public function create()
    {

        $newPost = new Post();
        $newPost -> name = 'بدون عنوان';
        $newPost -> statusPublish  = 'draft';
        $newPost -> user_id  = Auth::id();
        $newPost->typePost = 'post' ;
        $newPost -> save();

        return redirect(asset('/dashboard/post/edit/'.$newPost->id));
    }


    public function edit(Post $id)
    {
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'نوشته جدید';
        $description= 'نوشته جدید';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/post" => " نوشته ها ", "/dashboard/post/create" => "نوشته جدید" ];
        $editor = true ;

        $post = $id;


        return view( 'PostView::editPost' , compact('html_tag_data' , 'title' , 'description' ,
            'breadcrumbs', 'editor' , 'post'));
    }

    public function update(Request $request)
    {
        $mytime = time();

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect(asset('/dashboard/post/edit/'.$request->post_id))
                ->withErrors($validator)
                ->withInput();
        }

        $post = Post::find($request->post_id);
        $post->texts = $request->texts ;

        if ($request->pic !== null and $request->pic_copy == null ) {
            $file = new FileManager();
            $file->filename =  'post';
            $file->where =  'post';
            $file->where_id = $post->id ;
            $file->user_id = Auth::id();
            $file->save();

            $filename = $file->id . '.' . $request->file('pic')->getClientOriginalExtension();
            $pathAdress = "uploads/post/" . date("Y", $mytime) . "/user_" . Auth::id();
            $request->file('pic')->move(public_path($pathAdress), $filename);
            $file->path = $pathAdress . '/' . $filename;
            $path_picture = $pathAdress . '/' . $filename;
            $file->save();

            $post->pic = $file->path;
        }elseif ( $request->pic_copy != null ){
            $post->pic = $request->pic_copy;
        }

        $post->save();

        return redirect(asset('dashboard/post/edit/'.$post->id));
    }

    public function picInPost(Request $request)
    {
        $mytime = time();
        $user_id = Auth::id();
        if($request->hasFile('upload')) {
            $filename = time().'.'. $request->file('upload')->getClientOriginalExtension();
            $pathAdress = "storage/uploads/editor/" . date("Y", $mytime) . "/user_" . $user_id;
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

            $thumb = public_path('torage/uploads/thumb/'.$filename);
            $image = Image::make($thumb)->resize(500, 250 , function ($constraint){
                $constraint -> aspectRatio();
            });
            $image ->save($thumb);

        }
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
        return redirect(asset('dashboard/post/edit/'.$post->id));
    }

    public function show(Post $post)
    {
        $title = $post->name ;
        $description= $post->titleSeo .' | '. $post->focusKeyword;
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  ", "/post/".$post->slug => $post->name ];
        $post->numberView = $post->numberView + 1 ;
        $post->save();
        $owl_carousel = true;
        $posts = Post::query()->where([
            'statusPublish' => 'publish',
            'typePost' => 'post',
        ])->orderByDesc('id')->take(8)->get();

        return view('PostView::showPost' , compact('title' , 'description' ,'breadcrumbs' , 'post', 'posts' , 'owl_carousel'));
    }

    public function showById(Post $id)
    {
        return redirect(asset('/post/'.$id->slug));
    }

    public function showCat()
    {

    }

    public function blog()
    {
        $title = 'مجله' ;
        $description= 'مجله آموزشی  ';
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  " ];

        return view('PostView::blogPost' , compact( 'title' , 'description' ,'breadcrumbs' ));
    }
}
