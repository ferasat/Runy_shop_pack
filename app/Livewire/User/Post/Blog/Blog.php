<?php

namespace App\Livewire\User\Post\Blog;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Post\Models\Post;

class Blog extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    #[Url]
    public $search = '';
    public $show = false, $statusShowPosts = 0, $i = 1, $countSlide = 0;
    public $statusBlog, $cat_id;

    public function mount()
    {
        if (strlen($this->search) > 1) {
            $this->statusBlog = 'search';
            $this->render();
        }
    }

    public function render()
    {
        if ($this->statusBlog == 'cat') {
            $posts = Post::where([
                'typePost' => 'post',
                'statusPublish' => 'publish',
                'cat_id' => $this->cat_id
            ])->orderBy('id', 'desc')->paginate(18);

        } elseif ($this->statusBlog == 'search') {
            $posts = Post::query()->where('statusPublish', 'publish',)->where('name', 'LIKE', '%' . $this->search . "%")->orderBy('id', 'desc')->paginate(21);
        } else {
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

        $dl_drivers = Post::query()->where('statusPublish', 'publish',)->where('name', 'LIKE', '%' . 'دانلود درایور' . "%")->get();

        $this->countSlide = count($post3);

        return view('livewire.user.post.blog.blog', compact('posts', 'post3', 'dl_drivers'));
    }

    public function changStatus()
    {
        //dd(2222);
        if ($this->statusShowPosts == 0)
            $this->statusShowPosts = 1;
        else $this->statusShowPosts = 0;
        $this->render();
    }

    public function searchBtn()
    {
        if (strlen($this->search) > 1) {
            $this->statusBlog = 'search';
            $this->render();
        }
    }
}
