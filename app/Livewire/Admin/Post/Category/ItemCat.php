<?php

namespace App\Livewire\Admin\Post\Category;

use Livewire\Component;
use Livewire\Attributes\On;
use Post\Models\CategoryPost;

class ItemCat extends Component
{
    public $cat, $name, $slug, $disableBtn = false, $status = 'show';

    public function mount()
    {
        $this->name = $this->cat->name;
        $this->slug = $this->cat->slug;
    }

    public function render()
    {
        return view('livewire.admin.post.category.item-cat');
    }

    public function deleteCat()
    {
        $this->disableBtn = true;
        $this->cat->delete();
        $this->dispatch('update_cat');
    }


    public function cheng_status()
    {

        $this->disableBtn = true;
        if ($this->status == 'show')
            $this->status = 'edit';
        else {
            $this->status = 'show';
        }
        $this->disableBtn = false;


    }

    #[On('chengStatus')]
    public function chengStatus($cat_id = false)
    {
        //dd($cat_id);
        if ($this->cat->id == $cat_id) {
            $this->disableBtn = true;
            if ($this->status == 'show')
                $this->status = 'edit';
            else {
                $this->status = 'show';
            }
            $this->disableBtn = false;
        }
    }
}
