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
        $this->breadcrumbs = '<ul class="breadcrumb">
                            <li>
                                <a href="'.asset('/').'" title=""><span>خانه</span></a>
                            </li>
                            <li>
                                <a href="'.asset('/shop').'" title="فروشگاه"><span>فروشگاه</span></a>
                            </li>
                        </ul>';
    }
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.user.product.shop' , [
            'products' => Product::query()->orderByDesc('id')->paginate(20),
        ]);
    }
}
