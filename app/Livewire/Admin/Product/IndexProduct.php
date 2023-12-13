<?php

namespace App\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithPagination;
use Product\Models\Product;

class IndexProduct extends Component
{
    use WithPagination;

    public $description, $word = null;
    protected $products;

    public function mount()
    {
        $this->products = Product::query()->where('formatProduct', 'normal')->orderByDesc('id')->paginate(15);
    }

    public function render()
    {
        if (strlen($this->word) > 1) {
            return view('livewire.admin.product.index-product', [
                'products' => Product::query()->where('formatProduct', 'normal')->where('name', 'LIKE', '%' . $this->word . "%")->orderByDesc('id')->paginate(15) ,
            ]);
        } else {
            return view('livewire.admin.product.index-product', [
                'products' => Product::query()->where('formatProduct', 'normal')->orderByDesc('id')->paginate(15),
            ]);
        }

    }

    public function updated()
    {
        if (strlen($this->word) > 1) {
            $this->render();
        }
    }
}
