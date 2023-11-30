<?php

namespace App\Livewire\User\Post\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use Post\Models\Post;

class Blog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $show = false, $statusShowPosts = 'st1', $i = 1, $countSlide = 0;
    public $statusBlog , $cat_id ;

    public function render()
    {
        if ($this->statusBlog == 'cat'){
            $posts = Post::where([
                'typePost' => 'post',
                'statusPublish' => 'publish',
                'cat_id' => $this->cat_id
            ])->orderBy('id', 'desc')->paginate(18);
        }else{
            $posts = Post::where([
                'typePost' => 'post',
                'statusPublish' => 'publish'
            ])->orderBy('id', 'desc')->paginate(18);
        }


        $post3 = Post::where([
            'typePost' => 'post',
            'statusPublish' => 'publish',
            'specialPin' => 1
        ])->orderBy('id', 'desc')->take(3)->get();

        $dl_drivers = Post::query()->where('statusPublish' , 'publish',)->where('name', 'LIKE', '%' . 'دانلود درایور' . "%")->get();

        $this->countSlide = count($post3);

        //dd($posts);
        return view('livewire.user.post.blog.blog', compact('posts', 'post3' , 'dl_drivers'));
    }
}
