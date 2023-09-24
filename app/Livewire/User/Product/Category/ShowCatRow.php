<?php

namespace App\Livewire\User\Product\Category;

use Livewire\Component;
use Product\Models\Product;

class ShowCatRow extends Component
{
    public $tax , $cat ;
    public function render()
    {
        $product = Product::query()->find($this->tax->type_id);
        return view('livewire.user.product.category.show-cat-row' , compact('product'));
    }
}
