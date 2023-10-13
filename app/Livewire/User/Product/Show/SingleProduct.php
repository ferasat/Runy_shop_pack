<?php

namespace App\Livewire\User\Product\Show;

use Livewire\Component;
use Poll\Models\Question;
use Product\Models\ProductFeatures;

class SingleProduct extends Component
{
    public $product , $breadcrumbs , $is_feature=false , $features , $features_items ,$question ;

    public function mount()
    {
        $this->features = ProductFeatures::query()->where('product_id' , $this->product->id)->get();
        $this->features_items = ProductFeatures::query()->where('product_id' , $this->product->id)->get();
        if ($this->features->count() > 0){
            $this->is_feature = true ;
        }
        $this->question=Question::query()->where([
            'for_type'=>'product',
            'for_type_id'=>$this->product->id
        ])->first();


    }
    public function render()
    {
        return view('livewire.user.product.show.single-product');
    }
}
