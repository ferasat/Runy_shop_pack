<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Product\Models\Product;

class IndexProduct extends Component
{
    public $description , $products ;

    public function mount()
    {

    }
    public function render()
    {
        $this->products = Product::query()->where('formatProduct' , 'normal')->orderByDesc('id')->get();
        return view('livewire.admin.product.index-product');
    }
}
