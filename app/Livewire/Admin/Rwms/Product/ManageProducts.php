<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Component;
use Livewire\WithPagination;
use RunyWarehousing\Models\RunyWMProduct;
use Livewire\Attributes\On;
use RunyWarehousing\Models\RunyWMProductSerial;


class ManageProducts extends Component
{
    use WithPagination;

    #[On('product-created')]
    public function render()
    {
        return view('livewire.admin.rwms.product.manage-products' , [
            'products'=>RunyWMProduct::query()->orderByDesc('id')->paginate(10)
        ]);
    }

    public function delete($pro_id)
    {
        RunyWMProductSerial::query()->where('wm_product_id' , $pro_id)->delete();
        RunyWMProduct::query()->find($pro_id)->delete();
        $this->render();
    }
}
