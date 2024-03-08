<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Component;
use RunyWarehousing\Models\RunyWMProductCategory;

class IndexCategory extends Component
{
    public $description , $name,  $disableBtn = false;
    public function render()
    {
        $cats = RunyWMProductCategory::all();

        return view('livewire.admin.rwms.product.index-category' , compact('cats'));
    }


    protected $rules = [
        'name' => 'required|max:58|unique:runy_w_m_product_categories',
    ];

    protected $messages = [
        'name.required' => 'نام لازم هست',
        'name.unique' => 'نام تکراری است . نباید تکراری باشد.',
        'name.max' => 'واژه ها بیش از حد هستند . حداکثر 58 واژه باید باشد',
    ];

    public function updated()
    {
        $this->validate();
    }

    public function add_cat()
    {

        $this->disableBtn = true ;
        $this->validate();

        $newCat = new RunyWMProductCategory();
        $newCat->name = $this->name;
        $newCat->save();

        $this->disableBtn = false ;
        $this->render();
    }
}
