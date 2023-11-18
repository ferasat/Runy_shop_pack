<?php

namespace App\Livewire\Admin\Product\Create\Productfeature;

use Livewire\Component;
use Product\Models\ProductFeatureItem;

class Featureitem extends Component
{
    public $feature , $value , $add_price , $statusSave=false;

    public function mount()
    {
        $this->value = $this->feature->value ;
        $this->add_price = $this->feature->add_price ;
    }
    public function render()
    {
        return view('livewire.admin.product.create.productfeature.featureitem');
    }

    public function updated()
    {
        $this->statusSave = false ;
        //dd($this->statusSave);
    }

    public function save()
    {
        $this->statusSave = true ;
        $this->feature->value = $this->value ;
        $this->feature->add_price = $this->add_price ;
        $this->feature->save();
        //sleep(50);
        //$this->statusSave = false ;

    }
    public function delete()
    {
        $this->feature->delete();
        $this->dispatch('update-features');
    }

}
