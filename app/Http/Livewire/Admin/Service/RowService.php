<?php

namespace App\Http\Livewire\Admin\Service;

use Livewire\Component;
use Product\Models\Product;

class RowService extends Component
{
    public $service ;
    public function render()
    {
        return view('livewire.admin.service.row-service');
    }

    public function deleteService()
    {
        Product::query()->find($this->service->id)->delete();
        $this->emite();
    }

    public function cloneService()
    {

    }
}
