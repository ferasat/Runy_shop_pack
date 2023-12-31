<?php

namespace App\Livewire\Admin\Cart;

use Cart\Models\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class IndexCart extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $carts= Cart::query()->orderBy('id' , 'desc')->paginate(20);
        //dd(Cart::query()->orderBy('id' , 'desc')->get());
        return view('livewire.admin.cart.index-cart' , compact('carts'));
    }
}
