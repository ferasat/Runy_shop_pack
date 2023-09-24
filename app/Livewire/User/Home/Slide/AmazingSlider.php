<?php

namespace App\Livewire\User\Home\Slide;

use Livewire\Component;
use Product\Models\Product;

class AmazingSlider extends Component
{
    public function render()
    {
        $products = Product::query()->where('specialPin' , 1)->orderByDesc('id')->take(6)->get();
        return view('livewire.user.home.slide.amazing-slider' , compact('products'));
    }
}
