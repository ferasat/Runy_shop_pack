<?php

namespace App\Livewire\Admin\Post\Category;

use Livewire\Component;
use Post\Models\CategoryPost;

class IndexCategory extends Component
{
    public $description , $name, $slug,$slug_, $texts, $statusChild, $statusMaster, $Inherited , $metaDescription, $focusKeyword,
        $titleSeo, $icon, $typeCat , $disableBtn = false;
    public function render()
    {
        $cats = CategoryPost::all();
        return view('livewire.admin.post.category.index-category' , compact('cats'));
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

    public function updated()
    {
        if ($this->slug == null or $this->slug == ''){
            $this->slug = slug($this->name , 'category');
        }else {
            $this->slug = slug($this->slug , 'category');
        }

        $this->validate();
    }


    public function save()
    {
        $this->disableBtn = true ;
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required',
        ]);

        $newCat = new CategoryPost();
        $newCat->name = $this->name ;
        $newCat->slug = $this->slug ;
        //$newCat->texts = $this->texts ;
        $newCat->titleSeo = $this->titleSeo ;
        $newCat->focusKeyword = $this->focusKeyword ;
        $newCat->metaDescription = $this->titleSeo.' | '.$this->focusKeyword ;
        $newCat->save();

        $this->render() ;
        $this->disableBtn = false ;
    }
}
