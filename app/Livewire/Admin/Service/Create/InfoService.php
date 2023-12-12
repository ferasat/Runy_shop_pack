<?php

namespace App\Livewire\Admin\Service\Create;

use Livewire\Component;
use Product\Models\Product;

class InfoService extends Component
{
    public $service , $price  , $input_stock=0 , $specialPrice , $is_expiry , $number_of_days_to_expiry , $havePrice=0;

    public function mount()
    {
        $this->number_of_days_to_expiry = $this->service->number_of_days_to_expiry ;

        if ($this->service->number_of_days_to_expiry > 0){
            $this->is_expiry = 1 ;
        }else{
            $this->is_expiry = 0 ;
        }
        if ($this->price > 1){
            $this->havePrice = 1 ;
        }else{
            $this->havePrice = 0 ;
        }
    }
    public function render()
    {
        return view('livewire.admin.service.create.info-service');
    }

    public function count_day($number)
    {
        $this->number_of_days_to_expiry = $number ;
    }

    public function updating(){

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
        $pro->number_of_days_to_expiry = $this->number_of_days_to_expiry;

        $pro->save();


    }
}
