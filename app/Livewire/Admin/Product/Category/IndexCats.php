<?php

namespace App\Livewire\Admin\Product\Category;

use App\Models\Taxonomy;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Product\Models\CategoryProduct;
use SiteLogs\Models\SiteLogs;

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
        $this->slug = catSlug($this->slug) ;

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
        $this->reset();
        $this -> render();

    }

    public function deleteCatOnly($cat_id)
    {
        $cat_selected = CategoryProduct::query()->find($cat_id) ;
        $newLog = new SiteLogs();
        $newLog->log_name = 'حذف دستبندی کالا';
        $newLog->description = 'کاربر '.fullName(Auth::id()).' دستبندی کالا به نام '.$cat_selected->name.' را حذف کرد';
        $newLog->type = 'CategoryProduct';
        $newLog->type_id = $cat_selected->id;
        $newLog->event = 'حذف';
        $newLog->causer_id = Auth::id();
        $newLog->save();

        $subCats = CategoryProduct::query()->where('master_id' , $cat_id)->get();
        if (count($subCats) > 0){
            foreach ($subCats as $cat){
                $subCatUpdate = CategoryProduct::query()->find($cat->id);
                $subCatUpdate->master_id = 0 ;
                $subCatUpdate->save() ;
            }
        }
        Taxonomy::query()->where([
            'item'=>'cat',
            'item_id'=>$cat_id,
        ])->delete();
        $cat_selected->delete();
        $this->render();
    }
}
