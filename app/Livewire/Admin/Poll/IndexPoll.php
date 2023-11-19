<?php

namespace App\Livewire\Admin\Poll;

use Livewire\Component;
use Poll\Models\Poll;


class IndexPoll extends Component
{
    public $polls;
    public function mount()
    {

    }
    public function render()
    {

        $this->polls=Poll::all();
        return view('livewire.admin.poll.index-poll');
    }
}
