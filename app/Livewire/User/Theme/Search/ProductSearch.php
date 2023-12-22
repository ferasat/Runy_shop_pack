<?php

namespace App\Livewire\User\Theme\Search;

use Livewire\Component;

class ProductSearch extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.user.theme.search.product-search');
    }

    public function searchBtn()
    {
        if (strlen($this->search) > 1)
            $this->redirect(asset('/shop?search=' . $this->search));
    }
}
