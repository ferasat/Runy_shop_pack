<?php

namespace App\Http\Livewire\Admin\Post\Edit;

use Livewire\Component;
use Post\Models\Post;

class Seo extends Component
{
    public $post , $titleSeo , $focusKeyword , $metaDescription ;

    public function mount()
    {
        $this->titleSeo = $this->post->titleSeo ;
        $this->focusKeyword = $this->post->focusKeyword ;
        $this->metaDescription = $this->post->metaDescription ;
    }

    public function render()
    {
        return view('livewire.admin.post.edit.seo');
    }

    public function updated()
    {
        $post = Post::find($this->post->id);
        $post -> titleSeo = $this->titleSeo ;
        $post -> focusKeyword = $this->focusKeyword ;
        $post -> metaDescription = $this->metaDescription ;
        $post -> save() ;
    }
}
