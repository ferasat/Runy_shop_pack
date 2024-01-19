<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;
use Poll\Models\PollQuestion;

class PollResult extends Component
{
    public $poll,$poll_questions;
    public function mount()
    {
        $this->poll_questions=PollQuestion::query()->where('poll_id',$this->poll->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.poll.result.poll-result');
    }
}
