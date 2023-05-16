<?php

namespace App\Http\Livewire\User\Product\Show;

use Livewire\Component;
use Product\Models\ProductFeatures;

class SingleProduct extends Component
{
    public $product , $breadcrumbs , $is_feature=false , $features , $features_items ;

    public function mount()
    {
        $this->features = ProductFeatures::query()->where('product_id' , $this->product->id)->get();
        $this->features_items = ProductFeatures::query()->where('product_id' , $this->product->id)->get();
        if ($this->features->count() > 0){
            $this->is_feature = true ;
        }
    }
    public function render()
    {
        return view('livewire.user.product.show.single-product');
    }
}
