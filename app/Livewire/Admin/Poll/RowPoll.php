<?php

namespace App\Livewire\Admin\Poll;

use Livewire\Component;
use Poll\Models\PollQuestionAnswer;

class RowPoll extends Component
{
    public $poll,$question,$answers;
    public function mount()
    {
       // $this->answers=PollQuestionAnswer::query()->where('question_id',$this->question->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.poll.row-poll');
    }
}
