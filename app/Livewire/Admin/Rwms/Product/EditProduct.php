<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use RunyWarehousing\Models\RunyWMProduct;
use RunyWarehousing\Models\RunyWMProductCategory;
use RunyWarehousing\Models\RunyWMProductSerial;
use RunyWarehousing\Models\RunyWMS;

class EditProduct extends Component
{
    use WithFileUploads;

/*    #[Validate('image|max:1624')] // 1MB Max*/
    public $pic;

    #[Validate('required|min:3|unique:runy_w_m_products')]
    public $name ;
    public $product , $texts , $wm_id , $wms , $category , $status='active' , $price , $input_stock , $input_stock_add=0 , $names ;

    public function mount()
    {
        $this->name =  $this->product->name;
        $this->texts =  $this->product->texts;
        $this->wm_id =  $this->product->wm_id;
        $this->category =  $this->product->category;
        $this->category_id =  $this->product->category_id;
        $this->status =  $this->product->status;
        $this->price =  $this->product->price;
        $this->input_stock =  $this->product->input_stock;

    }

    public function render()
    {
        $this->wms = RunyWMS::query()->orderByDesc('id')->get();
        $wm = $this->wms->first() ;
        $this->names = RunyWMProduct::query()->orderByDesc('id')->get()->take(5);
        $serials = RunyWMProductSerial::query()->where('wm_product_id' , $this->product->id)->get();
        $cats = RunyWMProductCategory::query()->orderByDesc('id')->get();
        return view('livewire.admin.rwms.product.edit-product' , compact('serials' , 'cats'));
    }

    public function changeStatusSerial($status , $serial_id)
    {
        $serial = RunyWMProductSerial::query()->find($serial_id);
        if ($status != $serial->status){
            if ($status != 'فروش نرفته'){
                $this->product->input_stock = $this->product->input_stock - 1 ;
            }elseif($status == 'فروش نرفته') {
                $this->product->input_stock = $this->product->input_stock + 1 ;
            }
            $this->product->save();
            $this->input_stock = $this->product->input_stock ;
            $serial->status = $status ;
            $serial->save() ;

        }
        $this->render();
    }

    public function deleteSerial($serial_id){
        $serial = RunyWMProductSerial::query()->find($serial_id);
        if ($serial->status == 'فروش نرفته') {
            $serial->delete();
            $this->product->input_stock = $this->product->input_stock - 1 ;
            $this->product->save() ;
            $this->render();
        }else {

        }
    }

    public function save()
    {

    }
}
