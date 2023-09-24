<?php

namespace App\Livewire\Admin\Product\Discount;

use Livewire\Component;

class IndexDiscount extends Component
{
    public $description , $discounts ;
    public function render()
    {
        return view('livewire.admin.product.discount.index-discount');
    }
}
