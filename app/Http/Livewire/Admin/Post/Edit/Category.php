<?php

namespace App\Http\Livewire\Admin\Post\Edit;

use Livewire\Component;
use Post\Models\CategoryPost;
use Post\Models\Post;

class Category extends Component
{
    public $post, $cat_id;

    public function mount()
    {
        $this->cat_id = $this->post->cat_id ;
    }

    public function render()
    {
        $cats = CategoryPost::all();
        return view('livewire.admin.post.edit.category' , compact('cats'));
    }

    public function updated()
    {
        $post = Post::find($this->post->id);
        $post->cat_id = $this->cat_id ;
        $post->save() ;
    }
}
