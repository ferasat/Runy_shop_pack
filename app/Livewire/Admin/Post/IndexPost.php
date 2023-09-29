<?php

namespace App\Livewire\Admin\Post;

use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;
use Livewire\WithPagination;
use Post\Models\Post;

class IndexPost extends Component
{
    use WithPagination;

    public $type, $description, $editView = false, $postInfo, $search = null , $status_search = false;

    protected $listeners = [
        'editPost' => 'editPost'
    ];

    public function mount()
    {

    }

    public function render()
    {
        if ($this->status_search == false){
            $posts = Post::query()->where('typePost', $this->type)->orderByDesc('id')->paginate(20);
        }else{
            $posts = Post::query()->where('name', 'LIKE', '%' . $this->search . "%")->orderByDesc('id')->paginate(20);
        }
        return view('livewire.admin.post.index-post', ['posts' => $posts]);
    }

    public function editPost($id)
    {
        $this->postInfo = Post::find($id);
        $this->editView = true;

    }

    public function updated($property)
    {
        if (strlen($this->search) > 2 and $property == 'search') {
            $this->status_search = true ;
            $this->render();
        }else {
            $this->status_search = false ;
            $this->render();
        }

    }
}
