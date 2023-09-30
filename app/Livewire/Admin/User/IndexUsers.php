<?php

namespace App\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class IndexUsers extends Component
{
    public $users ;

    public function mount()
    {
        $this->users = User::all();
    }
    public function render()
    {
        return view('livewire.admin.user.index-users');
    }
}
