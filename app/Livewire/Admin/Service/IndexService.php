<?php

namespace App\Livewire\Admin\Service;

use Livewire\Attributes\On;
use Livewire\Component;
use Product\Models\Product;

class IndexService extends Component
{
    public $services;

    #[On('reload_render')]
    public function render()
    {
        $this->services = Product::query()->where('formatProduct' , 'service')->orderByDesc('id')->get();
        return view('livewire.admin.service.index-service');
    }
}
