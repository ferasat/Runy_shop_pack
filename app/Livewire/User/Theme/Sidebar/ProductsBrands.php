<?php

namespace App\Livewire\User\Theme\Sidebar;

use Livewire\Component;
use Product\Models\CategoryProduct;

class ProductsBrands extends Component
{
    public $brands , $catBrand , $selectBrands = [] , $selected_brands =[];

    public function mount()
    {
        $this->catBrand = CategoryProduct::query()->where('slug' , 'brand')->first();
        $this->brands = CategoryProduct::query()->where('master_id' , $this->catBrand->id)->get();
        foreach ($this->brands as $brand){
            $this->selectBrands[$brand->id] = false;
        }
    }
    public function render()
    {
        return view('livewire.user.theme.sidebar.products-brands');
    }

    public function action()
    {
        foreach ($this->selectBrands as $barnd_id=>$brand_status){
            if ($brand_status==true and !in_array($barnd_id , $this->selected_brands)){
                $this->selected_brands[] = $barnd_id;
            }elseif($brand_status==false and in_array($barnd_id , $this->selected_brands)) {
                $this->selected_brands = array_diff($this->selected_brands, array($barnd_id));
            }
        }

        $this->dispatch('select-brands' , brands: $this->selected_brands );
        //dd($this->selectBrands , $this->selected_brands);
    }
}
