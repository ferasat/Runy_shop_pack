<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\Product;

class IndexProduct extends Component
{
    use WithPagination ;
    public $description , $word=null ;
    protected $products ;

    public function mount()
    {
        $this->products = Product::query()->where('formatProduct' , 'normal')->orderByDesc('id')->paginate(15) ;
    }
    public function render()
    {
        return view('livewire.admin.product.index-product', [
            'products'=> $this->products ,
        ]);
    }

    public function updated()
    {
        if (strlen($this->word) > 2){
            $this->products = Product::query()->where('formatProduct' , 'normal')->where('name', 'LIKE', '%' . $this->word . "%")->orderByDesc('id')->paginate(15) ;
            $this->render();
        }else{
            $this->products = Product::query()->where('formatProduct' , 'normal')->orderByDesc('id')->paginate(15) ;
            $this->render();
        }
    }
}
