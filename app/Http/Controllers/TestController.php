<?php

namespace App\Http\Controllers;

use App\Models\Taxonomy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Post\Models\Post;

class TestController extends Controller
{
    public function index()
    {
        //dd(catsInPro(5));
        foreach (catsInPro(5) as $tax) {
            if ($tax->item_id == 4) {
                dd('oke1');
            }
        }
        dd(isOrNot_pro(4, 5));
        //dd(isOrNot(1 , 7));
    }

    public function postMove()
    {
        $wp_posts = DB::table('wp93_posts')->where([
            'post_status' => 'publish' ,
            'post_type' => 'post'
        ])->get();

        foreach ($wp_posts as $post){
            $newPost = new Post();
            $newPost->user_id = 1 ;
            $newPost->name = $post->post_title ;
            $newPost->texts = $post->post_content ;
            $newPost->slug = $post->post_name ;
            $newPost->shortDescription = $post->post_excerpt ;
            $newPost->date_publish = $post->post_date ;
            $newPost->save() ;
        }

        dd($wp_posts);
    }
}
