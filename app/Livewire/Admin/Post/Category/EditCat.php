<?php

namespace App\Livewire\Admin\Post\Category;

use Livewire\Component;
use Post\Models\CategoryPost;

class EditCat extends Component
{
    public $cat , $name, $slug , $description ;

    public function mount()
    {
        $this->name = $this->cat->name;
        $this->slug = $this->cat->slug;
        $this->description = $this->cat->description;
    }
    public function render()
    {
        return view('livewire.admin.post.category.edit-cat');
    }

    public function save()
    {
        $this->validate([
            'name'=> 'required|min:1',
            'slug'=> 'required|min:1',
        ]);

        $this->cat->name = $this->name ;
        $this->cat->slug = $this->slug ;
        $this->cat->description = $this->description ;
        /*
        $this->cat->titleSeo = $this->titleSeo ;
        $this->cat->focusKeyword = $this->focusKeyword ;
        $this->cat->metaDescription = $this->titleSeo.' | '.$this->focusKeyword ;
        */
        $this->cat->save();

        $this->dispatch('chengStatus' , cat_id:$this->cat->id);
    }
}
