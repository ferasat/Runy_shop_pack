<?php

namespace App\Livewire\Admin\Rwms\Product;

use Livewire\Component;

class EditCategory extends Component
{
    public $cat , $name , $editStatus = false;

    public function mount()
    {
        $this->name = $this->cat->name ;
    }
    public function render()
    {
        return view('livewire.admin.rwms.product.edit-category');
    }

    public function save()
    {
        $this->cat->name = $this->name ;
        $this->cat->save() ;
        $this->changeBtn();
    }

    public function changeBtn()
    {
        $this->editStatus = !$this->editStatus ;
    }
}
