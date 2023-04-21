<?php

namespace App\Http\Livewire\User\Home;

use Livewire\Component;
use Post\Models\Post;

class SectionThree extends Component
{
    public function render()
    {
        $posts = Post::where([
            'typePost' => 'post',
            'statusPublish' => 'publish'
        ])->get();
        //dd($posts);
        return view('livewire.user.home.section-three' , compact('posts'));
    }
}
