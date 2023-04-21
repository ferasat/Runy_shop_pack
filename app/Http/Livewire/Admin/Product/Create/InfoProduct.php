<?php

namespace App\Http\Livewire\Admin\Product\Create;

use Livewire\Component;
use Product\Models\Product;

class InfoProduct extends Component
{
    public $product , $price  , $input_stock , $specialPrice;

    public function mount()
    {
        $this->price = $this->product->price;
        $this->input_stock = $this->product->input_stock;
        $this->specialPrice = $this->product->specialPrice;
    }

    public function render()
    {
        return view('livewire.admin.product.create.info-product');
    }

    public function updated()
    {
        //dd($this->product->id);
        $pro = Product::find($this->product->id);
        $pro->price = $this->price;
        $pro->input_stock = $this->input_stock;
        $pro->specialPrice = $this->specialPrice;
        $pro->save();
    }
}
