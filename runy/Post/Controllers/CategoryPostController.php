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
        $html_tag_data = ["override"=>'{ "attributes" : { "placement" : "horizontal", "layout":"boxed" }, "storagePrefix" : "starter-project", "showSettings" : false }'];
        $title = 'دستبندی ها';
        $description= 'مدیریت دستبندی ها';
        $breadcrumbs = ["/dashboard"=>" پیشخوان " , "/dashboard/post/cat" => " دستبندی ها " ];

        $categories = CategoryPost::all()->sortByDesc('id');
        $editor = true ;

        return view( 'PostView::indexCategory' , compact('html_tag_data' , 'title' , 'description'
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


    public function show(CategoryPost $categoryPost)
    {
        //
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
