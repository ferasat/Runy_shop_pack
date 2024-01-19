<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Poll\Models\PollTemplate;

class IndexPollTemp extends Component
{
    public $titlePage,$poll_temps;
    public function mount()
    {
        $this->poll_temps=PollTemplate::all();
    }
    public function render()
    {
        return view('livewire.admin.poll.temp.index-poll-temp');
    }
}
