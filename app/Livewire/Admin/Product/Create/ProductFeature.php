<?php

namespace App\Livewire\Admin\Product\Create;

use Livewire\Component;
use Product\Models\ProductFeatureItem;

class ProductFeature extends Component
{
    public $product , $featuresItem , $saveStatus= false ;
    public $name , $value , $description ;

    public function mount()
    {
        $this->featuresItem = ProductFeatureItem::query()->where('product_id' , $this->product->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.product.create.product-feature');
    }

    public function save()
    {
        dd(5454);
    }
}
