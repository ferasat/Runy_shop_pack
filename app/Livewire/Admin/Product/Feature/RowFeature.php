<?php

namespace App\Livewire\Admin\Product\Feature;

use Livewire\Component;

class RowFeature extends Component
{
    public $feature;
    public function render()
    {
        return view('livewire.admin.product.feature.row-feature');
    }
}
