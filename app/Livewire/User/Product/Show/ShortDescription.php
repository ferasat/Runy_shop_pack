<?php

namespace App\Livewire\User\Product\Show;

use Livewire\Component;
use Product\Models\ProductFeatureItem;

class ShortDescription extends Component
{
    public $product , $is_feature=false , $features , $features_items  ;

    public function mount()
    {
        $this->features = ProductFeatureItem::query()->where('product_id' , $this->product->id)->get();

        if ($this->features->count() > 0){
            $this->is_feature = true ;
        }
    }
    public function render()
    {
        return view('livewire.user.product.show.short-description');
    }
}
