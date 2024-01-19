<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;
use Poll\Models\PollQuestionAnswer;

class PollAnswerResult extends Component
{
    public $poll_question,$poll_answers,$index;
    public function mount()
    {
        $this->poll_answers=PollQuestionAnswer::query()->where('poll_question_id',$this->poll_question->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.poll.result.poll-answer-result');
    }
}
