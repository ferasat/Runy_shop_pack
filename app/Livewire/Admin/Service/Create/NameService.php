<?php

namespace App\Livewire\Admin\Service\Create;

use Livewire\Component;
use Product\Models\Product;

class NameService extends Component
{
    public $service , $name_, $slug;

    public function mount()
    {
        $this->name_ = $this->service->name;
        $this->slug = $this->service->slug;
    }
    public function render()
    {
        return view('livewire.admin.service.create.name-service');
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

        $pro = Product::find($this->service->id);
        $pro->name = $this->name_;
        $pro->slug = $this->slugCheck($this->slug);
        $pro->save();

    }

}
