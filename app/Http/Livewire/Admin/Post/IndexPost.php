<?php

namespace App\Http\Livewire\Admin\Post;

use Livewire\Component;
use Post\Models\Post;

class IndexPost extends Component
{
    public $type , $description , $editView = false , $postInfo;

    protected $listeners = [
        'editPost' => 'editPost'
    ];

    public function render()
    {
        if ($this->type == 'post' or $this->type == 'portfolio')
            $posts = Post::query()->where('typePost' , 'post')->orWhere('typePost' , 'portfolio')->orderByDesc('id')->paginate(20);
        else
            $posts = Post::query()->where('typePost' , $this->type)->orderByDesc('id')->paginate(20);
        return view('livewire.admin.post.index-post' , compact('posts'));
    }

    public function editPost($id)
    {
        $this->postInfo = Post::find($id);
        $this->editView = true ;

    }
}
