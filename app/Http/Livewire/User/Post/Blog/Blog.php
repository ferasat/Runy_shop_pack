<?php

namespace App\Http\Livewire\User\Post\Blog;

use Livewire\Component;
use Livewire\WithPagination;
use Post\Models\Post;

class Blog extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $show = false ;
    public function render()
    {
        $posts = Post::where([
            'typePost' => 'post',
            'statusPublish' => 'publish'
        ])->orderBy('id' , 'desc')->paginate(16);
        return view('livewire.user.post.blog.blog' , compact('posts'));
    }
}
