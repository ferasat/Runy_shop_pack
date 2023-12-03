<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\Product;

class IndexProduct extends Component
{
    use WithPagination ;
    public $description  ;

    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.admin.product.index-product', [
            'products'=> Product::query()->where('formatProduct' , 'normal')->orderByDesc('id')->paginate(15) ,
        ]);
    }
}
