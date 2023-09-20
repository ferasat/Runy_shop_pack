<?php

namespace App\Http\Livewire\Admin\Product\Create;

use Product\Models\CategoryProduct;
use Livewire\Component;
use Product\Models\Product;

class SidebarProduct extends Component
{
    public  $product , $statusPublish , $picture , $categories , $chb=[] , $specialPin ;

    public function mount()
    {
        $this->statusPublish = $this->product->statusPublish ;
        $this->pic = $this->product->picture ;
        $this->specialPin = $this->product->specialPin ;
        $this->categories = CategoryProduct::all();
    }
    public function render()
    {
        return view('livewire.admin.product.create.sidebar-product');
    }

    public function updated()
    {
        /*dd($this->chb);*/
        $pro = Product::query()->find($this->product->id);
        $pro->statusPublish = $this->statusPublish;
        $pro->specialPin = $this->specialPin;
        $pro->save();
    }


}
