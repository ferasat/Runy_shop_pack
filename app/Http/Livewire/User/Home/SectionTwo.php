<?php

namespace App\Http\Livewire\User\Home;

use Livewire\Component;
use Product\Models\Product;

class SectionTwo extends Component
{
    public function render()
    {
        $products = Product::where('statusPublish' , 'publish')->get();
        //dd($products);
        return view('livewire.user.home.section-two' , compact('products'));
    }
}
