<?php

namespace App\Http\Livewire\Admin\Product\Discount;

use Livewire\Component;

class RowDiscount extends Component
{
    public $discount;
    public function render()
    {
        return view('livewire.admin.product.discount.row-discount');
    }
}
