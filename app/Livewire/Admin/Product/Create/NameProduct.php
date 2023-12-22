<?php

namespace App\Livewire\Admin\Product\Create;

use http\Env\Request;
use Livewire\Component;
use Product\Models\Product;

class NameProduct extends Component
{
    public $product, $name_, $slug;

    public function mount()
    {
        $this->name_ = $this->product->name;
        $this->slug = $this->product->slug;
    }
    public function render()
    {
        return view('livewire.admin.product.create.name-product');
    }

    protected $rules = [
        'name_' => 'required|max:75',
        'slug' => 'max:175',
    ];

    public function slugCheck($data)
    {
        $this->slug = productSlug($data);
        return productSlug($data);
    }

    public function updated()
    {
        $this->validate();

        $pro = Product::find($this->product->id);
        $pro->name = $this->name_;
        if ($pro->slug !== $this->slug ){
            $pro->slug = $this->slugCheck($this->slug);
        }
        $pro->save();

    }
}
