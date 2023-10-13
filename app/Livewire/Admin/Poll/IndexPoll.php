<?php

namespace App\Livewire\Admin\Poll;

use Livewire\Component;
use Poll\Models\Question;

class IndexPoll extends Component
{
    public $questions;
    public function mount()
    {

    }
    public function render()
    {

        $this->questions=Question::all();
        return view('livewire.admin.poll.index-poll');
    }
}
