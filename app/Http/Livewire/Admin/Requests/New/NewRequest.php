<?php

namespace App\Http\Livewire\Admin\Requests\New;

use Livewire\Component;

class NewRequest extends Component
{
    public $name , $family , $cell , $email , $pic , $description , $department ;
    public function render()
    {
        return view('livewire.admin.requests.new.new-request');
    }
}
