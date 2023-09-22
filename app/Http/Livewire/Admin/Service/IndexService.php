<?php

namespace App\Http\Livewire\Admin\Service;

use Livewire\Component;
use Product\Models\Product;

class IndexService extends Component
{
    public $services;
    public function render()
    {
        $this->services = Product::query()->where('formatProduct' , 'service')->orderByDesc('id')->get();
        return view('livewire.admin.service.index-service');
    }
}
