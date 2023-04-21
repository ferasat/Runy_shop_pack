<?php

use Illuminate\Support\Facades\DB;
use Post\Models\Post;

function slug($data , $type){
    $data =  str_replace(" " ,"-" , $data);
    if ($type == 'post' or $type == 'page' or $type == 'portfolio'){
        $post = Post::query()->where('slug' , $data)->first();
        if ($post == null)
            return $data ;
        else return $data.time();
    }elseif($type == 'category') {
        $cat = \Post\Models\CategoryPost::query()->where('slug' , $data)->first();
        if ($cat == null)
            return $data ;
        else return $data.time();
    }else{
        return 'Error None type /'.time();
    }
 }

 function recentPosts($num){
     return DB::table('posts')->where([
         'statusPublish' => 'publish',
         'typePost' => 'post',
     ])->take($num)->orderBy('id' , 'desc')->get();
 }

 function statusPost($data){
    if ($data == 'forCheck')
        return 'برای بررسی';
    elseif($data == 'draft')
        return 'پیش نویس';
    elseif ($data == 'publish')
        return 'منتشر شده';
    else return 'اطلاعی نیست';
 }

 function type_name_fa($type){

    if ($type == 'post')
        return 'نوشته';
    elseif ($type == 'page')
        return 'برگه';
    else return 'نمونه کار';
 }
