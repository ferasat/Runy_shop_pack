<?php

namespace App\Livewire\Admin\Product\Create\Feature;

use Livewire\Component;
use Product\Models\ProductFeatureItem;
use Product\Models\ProductFeatures;

class AddFeature extends Component
{
    public  $product , $name ;

    public function render()
    {
        return view('livewire.admin.product.create.feature.add-feature');
    }

    public function save()
    {
        $newFeature = new ProductFeatures();
        $newFeature->name = $this->name ;
        $newFeature->product_id = $this->product->id ;
        $newFeature->save() ;

        $newFeatureItem = new ProductFeatureItem();
        $newFeatureItem->name = $this->name ;
        $newFeatureItem->product_id = $this->product->id ;
        $newFeatureItem->product_feature_id = $newFeature->id ;
        $newFeatureItem->save();

        $this->dispatch('update-features');
    }
}
