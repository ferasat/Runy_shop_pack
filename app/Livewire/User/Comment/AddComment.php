<?php

namespace App\Livewire\User\Comment;

use Livewire\Component;

class AddComment extends Component
{
    public $item , $type ;

    public function render()
    {
        return view('livewire.user.comment.add-comment');
    }
}
