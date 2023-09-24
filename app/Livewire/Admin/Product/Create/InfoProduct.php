<?php

namespace App\Livewire\Admin\Product\Create;

use Livewire\Component;
use Product\Models\Product;

class InfoProduct extends Component
{
    public $product , $price  , $input_stock=0 , $specialPrice;

    public function mount()
    {
        $this->price = $this->product->price;
        $this->input_stock = $this->product->input_stock;
        $this->specialPrice = $this->product->specialPrice;
        ///dd($this->price);
    }

    public function render()
    {
        return view('livewire.admin.product.create.info-product');
    }

    public function updated()
    {
        $pro = Product::find($this->product->id);

        if ($this->price == 0 or $this->price == null or $this->price == ''){
            $pro->price = 0;
        }else{
            $pro->price = $this->price;
        }

        if ($this->specialPrice == 0 or $this->specialPrice == null or $this->specialPrice == ''){
            $pro->specialPrice = 0;
        }else{
            $pro->specialPrice = $this->specialPrice;
        }

        $pro->input_stock = $this->input_stock;
        $pro->save();
    }
}
