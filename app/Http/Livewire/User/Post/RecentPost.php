<?php

namespace App\Http\Livewire\User\Post;

use Livewire\Component;
use Post\Models\Post;

class RecentPost extends Component
{
    public $posts ;

    public function mount()
    {
        $this->posts = Post::query()->where('statusPublish' , 'publish')->where('typePost' , 'post')->orderByDesc('id')->get()->take(8);
        //dd($this->posts);
    }

    public function render()
    {
        return view('livewire.user.post.recent-post');
    }
}
