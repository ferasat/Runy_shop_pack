<?php

namespace App\Http\Livewire\User\Theme;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $breadcrumbs ;
    public function render()
    {
        return view('livewire.user.theme.breadcrumbs');
    }
}
