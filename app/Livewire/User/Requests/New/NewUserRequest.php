<?php

namespace App\Livewire\User\Requests\New;

use Livewire\Component;

class NewUserRequest extends Component
{
    public $name , $family , $cell , $email , $pic , $description , $department ;
    public function render()
    {
        return view('livewire.user.requests.new.new-user-request');
    }
}
