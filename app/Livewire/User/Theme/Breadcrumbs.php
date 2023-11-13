<?php

namespace App\Livewire\User\Theme;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $breadcrumbs , $x=1 , $y;

    public function mount()
    {
        $this->y = count($this->breadcrumbs);
    }
    public function render()
    {
        return view('livewire.user.theme.breadcrumbs');
    }
}
