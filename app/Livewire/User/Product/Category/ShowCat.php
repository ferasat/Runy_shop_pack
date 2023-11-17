<?php

namespace App\Livewire\User\Product\Category;

use App\Models\Taxonomy;
use Livewire\Component;

class ShowCat extends Component
{
    public $cat , $breadcrumbs;
    public function render()
    {
        $taxs = Taxonomy::query()->where([
            'type' => 'product',
            'item' => 'cat',
            'item_id' => $this->cat->id,
            'is' => '1',
        ])->paginate(15);

        return view('livewire.user.product.category.show-cat' , compact('taxs'));
    }
}
