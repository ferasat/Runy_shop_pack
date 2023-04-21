<?php

namespace App\Http\Livewire\User\Product\Show;

use Livewire\Component;

class ShortDescription extends Component
{
    public $product ;
    public function render()
    {
        return view('livewire.user.product.show.short-description');
    }
}
