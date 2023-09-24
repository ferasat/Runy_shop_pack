<?php

namespace App\Livewire\Admin\Product\Category;

use Livewire\Component;
use Product\Models\CategoryProduct;

class IndexCats extends Component
{
    public $cats , $name , $slug , $description , $master_id = 0 , $focusKeyword , $titleSeo , $metaDescription , $showSave = false;
    public function render()
    {
        $this->cats = CategoryProduct::all();
        return view('livewire.admin.product.category.index-cats' );
    }

    public function updated()
    {
        $this->slug = catSlug($this-> slug) ;
        $this->showSave = false ;
    }

    protected $rules = [
        'name' => 'required|max:75',
        'slug' => 'required|max:175',
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'slug.required' => 'نامک لازم هست',
        'name.max' => 'واژه ها بیش از حد هستند . حداکثر 58 واژه باید باشد',
        'slug.max' => 'واژه ها بیش از حد هستند . حداکثر 175 واژه باید باشد',
    ];

    public function save()
    {
        $this->validate();
        $cat = new CategoryProduct();
        $cat -> name = $this-> name ;
        $cat -> slug = catSlug($this-> slug) ;
        $cat -> description = $this-> description ;
        $cat -> master_id = $this-> master_id ;
        if ($this-> master_id == 0){
            $cat -> statusMaster = 'yes' ;
        }
        $cat -> save() ;
        $this -> showSave = true ;
        $this -> render();
    }
}
