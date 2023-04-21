<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;

class IndexProduct extends Component
{
    public $description , $products ;
    public function render()
    {
        return view('livewire.admin.product.index-product');
    }
}
