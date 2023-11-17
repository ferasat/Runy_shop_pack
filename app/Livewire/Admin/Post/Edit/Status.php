<?php

namespace App\Livewire\Admin\Post\Edit;

use Livewire\Component;
use Post\Models\Post;

class Status extends Component
{
    public $post , $statusPublish , $typePost , $specialPin;

    public function mount()
    {
        $this->statusPublish = $this->post->statusPublish ;
        $this->typePost = $this->post->typePost ;
        $this->specialPin = $this->post->specialPin ;
    }
    public function render()
    {
        return view('livewire.admin.post.edit.status');
    }

    public function updated()
    {
        $post = Post::find($this->post->id);
        $post -> statusPublish = $this->statusPublish ;
        $post -> typePost = $this->typePost ;
        $post -> specialPin = $this->specialPin ;
        $post -> save() ;
    }
}
