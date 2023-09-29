<?php

namespace App\Livewire\Admin\Service\Create;

use Livewire\Component;
use Product\Models\CategoryProduct;
use Product\Models\Product;

class SidebarService extends Component
{
    public  $service , $statusPublish , $picture , $categories , $chb=[] , $specialPin ;

    public function mount()
    {
        $this->statusPublish = $this->service->statusPublish ;
        $this->pic = $this->service->picture ;
        $this->specialPin = $this->service->specialPin ;
        $this->categories = CategoryProduct::all();
    }
    public function render()
    {
        return view('livewire.admin.service.create.sidebar-service');
    }

    public function updated()
    {
        /*dd($this->chb);*/
        $pro = Product::query()->find($this->service->id);
        $pro->statusPublish = $this->statusPublish;
        $pro->specialPin = $this->specialPin;
        $pro->save();
    }
}
