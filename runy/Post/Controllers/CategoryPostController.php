<?php

namespace Post\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Post\Models\CategoryPost;
use Post\Models\Post;

class CategoryPostController extends Controller
{

    public function index()
    {
        $title = 'دستبندی ها';
        $description= 'مدیریت دستبندی ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/post/cat" => " دستبندی ها " ];

        $categories = CategoryPost::all()->sortByDesc('id');
        $editor = true ;

        return view( 'PostView::indexCategory' , compact( 'title' , 'description'
            , 'editor' , 'breadcrumbs' , 'categories'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(CategoryPost $categorypost)
    {
        $posts_in_cat = Post::query()->where([
            'typePost' => 'post',
            'statusPublish' => 'publish',
            'cat_id' => $categorypost->id
        ])->orderByDesc('id')->get();

        //dd($posts_in_cat , $categorypost);

        $title = 'مجله' ;
        $description= 'مجله آموزشی  ';
        $breadcrumbs = ["/"=>" خانه " , "/blog" => " وبلاگ  " ];
        $statusBlog = 'cat';

        return view('PostView::blogPost' , compact( 'title' , 'description' ,'breadcrumbs' ,
            'posts_in_cat' , 'statusBlog' ));
    }


    public function edit(CategoryPost $categoryPost)
    {
        //
    }

    public function update(Request $request, CategoryPost $categoryPost)
    {
        //
    }


    public function destroy(CategoryPost $categoryPost)
    {
        //
    }
}
