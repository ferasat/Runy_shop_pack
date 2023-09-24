<?php

namespace App\Livewire\Admin\Service\Create;

use Livewire\Component;
use Product\Models\Product;

class InfoService extends Component
{
    public $service , $price  , $input_stock=0 , $specialPrice;
    public function render()
    {
        return view('livewire.admin.service.create.info-service');
    }

    public function updated()
    {
        $pro = Product::find($this->service->id);

        if ($this->price == 0 or $this->price == null or $this->price == ''){
            $pro->price = 0;
        }else{
            $pro->price = $this->price;
        }

        if ($this->specialPrice == 0 or $this->specialPrice == null or $this->specialPrice == ''){
            $pro->specialPrice = 0;
        }else{
            $pro->specialPrice = $this->specialPrice;
        }

        $pro->input_stock = $this->input_stock;
        $pro->save();
    }
}
