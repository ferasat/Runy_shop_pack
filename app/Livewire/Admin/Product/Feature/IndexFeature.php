<?php

namespace App\Livewire\Admin\Product\Feature;

use Livewire\WithPagination;
use Product\Models\ProductFeatures;
use Livewire\Component;

class IndexFeature extends Component
{
    use WithPagination;


    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.admin.product.feature.index-feature' , [
            'features' => ProductFeatures::paginate(20),
        ]);
    }
}
