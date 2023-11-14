<?php

namespace App\Livewire\User\Product\Show;

use Livewire\Component;
use Poll\Models\Question;
use Product\Models\ProductFeatureItem;
use Product\Models\ProductFeatures;

class SingleProduct extends Component
{
    public $product , $breadcrumbs ,$question ;

    public function mount()
    {


        /*
         * یک شرط براش تعیین بشود که در صورتی که این حصول را خرید کرده بود نظر سنجی براش اشکار بشود
        $this->question=Question::query()->where([
            'for_type'=>'product',
            'for_type_id'=>$this->product->id
        ])->first();
        */


    }
    public function render()
    {
        return view('livewire.user.product.show.single-product');
    }
}
