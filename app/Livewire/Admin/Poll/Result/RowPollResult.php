<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;

class RowPollResult extends Component
{
    public $poll;
    public function render()
    {
        return view('livewire.admin.poll.result.row-poll-result');
    }
}
