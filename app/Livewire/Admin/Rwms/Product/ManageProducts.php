<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Component;
use Livewire\WithPagination;
use RunyWarehousing\Models\RunyWMProduct;
use Livewire\Attributes\On;


class ManageProducts extends Component
{
    use WithPagination;

    #[On('product-created')]
    public function render()
    {
        return view('livewire.admin.rwms.product.manage-products' , [
            'products'=>RunyWMProduct::query()->orderByDesc('id')->paginate(3)
        ]);
    }
}
