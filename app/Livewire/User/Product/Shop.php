<?php

namespace App\Livewire\User\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\Product;

class Shop extends Component
{
    use WithPagination;

    public $breadcrumbs ;

    public function mount()
    {

    }
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.user.product.shop' , [
            'products' => Product::query()->where([
                'statusPublish' => 'publish' ,
                'formatProduct' => 'normal' ,
            ])->orderByDesc('id')->paginate(20),
        ]);
    }
}
