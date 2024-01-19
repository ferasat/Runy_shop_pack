<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;

class AllPollResult extends Component
{
    public $polls,$titlePage;
    public function render()
    {
        return view('livewire.admin.poll.result.all-poll-result');
    }
}
