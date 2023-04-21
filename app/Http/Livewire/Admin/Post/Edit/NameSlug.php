<?php

namespace App\Http\Livewire\Admin\Post\Edit;

use Livewire\Component;
use Post\Models\Post;

class NameSlug extends Component
{
    public $post, $name, $slug;

    public function mount()
    {
        $this->name = $this->post->name;
        $this->slug = $this->post->slug;
    }

    protected $rules = [
        'name' => 'required|max:58',
        'slug' => 'max:100',
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'name.max' => 'واژه ها بیش از حد هستند . حداکثر 58 واژه باید باشد',
        'slug.max' => 'واژه ها بیش از حد هستند . حداکثر 58 واژه باید باشد',
    ];

    public function render()
    {
        return view('livewire.admin.post.edit.name-slug');
    }

    public function updated()
    {
        $this->validate();
        $post = Post::find($this->post->id);
        $post->name = $this->name;
        if ($this->slug == null)
            $this->slug = slug($this->name , $this->post->typePost);
        else {
            $this->slug = slug($this->slug , $this->post->typePost);
        }
        $post->slug = $this->slug;
        $post->save();
    }

}
