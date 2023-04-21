<?php

namespace App\Http\Livewire\User\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\Product;

class Shop extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.user.product.shop' , [
            'products' => Product::query()->orderByDesc('id')->paginate(20),
        ]);
    }
}
