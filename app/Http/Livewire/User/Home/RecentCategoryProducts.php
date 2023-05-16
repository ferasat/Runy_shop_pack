<?php

namespace App\Http\Livewire\User\Home;

use Livewire\Component;
use Product\Models\Product;

class RecentCategoryProducts extends Component
{
    public $cat_id ;
    public function render()
    {
        $products = Product::query()->where('specialPin' , 1)->orderByDesc('id')->take(6)->get();
        return view('livewire.user.home.recent-category-products' , compact('products'));
    }
}
