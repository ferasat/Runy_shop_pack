<?php

namespace App\Livewire\User\Product\Show;

use Livewire\Component;

class Picture extends Component
{
    public $product ;
    public function render()
    {
        return view('livewire.user.product.show.picture');
    }
}
