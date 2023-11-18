<?php

namespace App\Livewire\Admin\Product\Create\Productfeature;

use Livewire\Component;
use Product\Models\ProductFeatureItem;

class Productfeature extends Component
{
    public $product , $featuresItem , $saveStatus= false ;
    public $name , $value , $description ;

    protected $listeners = [
        'update-features'=>'render'
    ];

    public function mount()
    {

    }

    public function render()
    {
        $this->featuresItem = ProductFeatureItem::query()->where('product_id' , $this->product->id)->get();
        return view('livewire.admin.product.create.productfeature.productfeature');
    }

    public function save()
    {
        dd(5454);
    }

}
