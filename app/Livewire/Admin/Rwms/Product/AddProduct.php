<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Component;
use RunyWarehousing\Models\RunyWMProduct;
use RunyWarehousing\Models\RunyWMProductCategory;
use RunyWarehousing\Models\RunyWMProductSerial;
use RunyWarehousing\Models\RunyWMS;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AddProduct extends Component
{
    use WithFileUploads;

    /*#[Validate('image|max:1624')] // 1MB Max*/
    public $pic;

    #[Validate('required|min:3|unique:runy_w_m_products')]
    public $name ;
    public $texts , $wm_id , $wms, $category , $category_id , $status='active' , $price , $input_stock , $names , $cats
    , $unit , $address , $source  ;

    public function mount()
    {

    }
    public function render()
    {
        $this->wms = RunyWMS::query()->orderByDesc('id')->get();
        $wm = $this->wms->first() ;
        $this->wm_id = $wm->id ;
        $this->names = RunyWMProduct::query()->orderByDesc('id')->get()->take(5);
        $this->cats = RunyWMProductCategory::query()->orderByDesc('id')->get();
        $this->category_id = $this->cats->first()->id;
        return view('livewire.admin.rwms.product.add-product');
    }

    public function addProduct()
    {
        //dd($this->validate());

        $this->validate();

        $cat = RunyWMProductCategory::query()->first($this->category_id);

        $newPro = new RunyWMProduct();
        $newPro->name = $this->name ;
        $newPro->texts = $this->texts ;
        $newPro->input_stock = $this->input_stock ;
        $newPro->wm_id = $this->wm_id ;
        $newPro->category = $cat->name ;
        $newPro->category_id = $this->category_id ;
        $newPro->price = $this->price ;
        if ($this->pic){
            $newPro->pic = 'storage/'.$this->pic->store('uploads/wm' , 'public');
        }else{
            $newPro->pic = 'theme/img/product-sample.jpg';
        }
        $newPro->save() ;

        if ($this->input_stock > 0){
            for ($x=1 ;$x <= $this->input_stock ; $x++){
                $newSerial = new RunyWMProductSerial();
                $newSerial->wm_product_id = $newPro->id ;
                $newSerial->price = $newPro->price ;
                $newSerial->save() ;
                $newSerial->serial = $newPro->id.'110'.$newSerial->id ;
                $newSerial->save() ;
            }

        }

        $this->dispatch('product-created');
        $this->reset();
    }

    public function save()
    {

    }
}
