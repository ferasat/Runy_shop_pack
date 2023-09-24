<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Product\Models\Product;

class RowProduct extends Component
{
    public $product;

    public function render()
    {
        return view('livewire.admin.product.row-product');
    }

    public function deleteProduct($product_id)
    {
        dd($product_id);
        Product::find($product_id)->delete();
    }

    public function cloneProduct($id)
    {
        dd($id);
        Product::find($id);
    }
}
