<?php

namespace App\Livewire\User\Home;

use Livewire\Component;
use Product\Models\Product;

class RecentCategoryProducts extends Component
{
    public $cat_id ;
    public function render()
    {
        $products = Product::query()->where([
            'specialPin' => 1,
            'statusPublish' => 'publish',
            'formatProduct' => 'normal'
        ])->orderByDesc('id')->take(6)->get();
        return view('livewire.user.home.recent-category-products' , compact('products'));
    }
}
