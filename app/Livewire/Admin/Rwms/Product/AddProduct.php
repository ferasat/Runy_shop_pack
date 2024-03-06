<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Component;
use RunyWarehousing\Models\RunyWMProduct;
use RunyWarehousing\Models\RunyWMS;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class AddProduct extends Component
{
    use WithFileUploads;

    #[Validate('image|max:1624')] // 1MB Max
    public $pic;

    #[Validate('required|min:3|unique:runy_w_m_products')]
    public $name ;
    public $texts , $wm_id , $wms, $category , $status='active' , $price , $input_stock , $names ;

    public function mount()
    {

    }
    public function render()
    {
        $this->wms = RunyWMS::query()->orderByDesc('id')->get();
        $wm = $this->wms->first() ;
        $this->wm_id = $wm->id ;
        $this->names = RunyWMProduct::query()->orderByDesc('id')->get()->take(5);
        return view('livewire.admin.rwms.product.add-product');
    }

    public function addProduct()
    {
        $this->validate();
        $newPro = new RunyWMProduct();
        $newPro->name = $this->name ;
        $newPro->texts = $this->texts ;
        $newPro->input_stock = $this->input_stock ;
        $newPro->wm_id = $this->wm_id ;
        $newPro->category = $this->category ;
        $newPro->price = $this->price ;
        if ($this->pic){
            $newPro->pic = $this->pic->store(path: 'public/uploads/wm/');
        }
        $newPro->save() ;

        $this->dispatch('product-created');
        $this->reset();
    }

    public function save()
    {

    }
}
