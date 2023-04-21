<?php

namespace App\Http\Livewire\Admin\Post;

use Livewire\Component;

class RowPost extends Component
{
    public $post ;
    public function render()
    {
        return view('livewire.admin.post.row-post');
    }
}
