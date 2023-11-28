<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;
use Poll\Models\PollQuestionAnswer;

class PollQuestionResult extends Component
{
    public $x,$question,$answers;
    public function mount()
    {
        $this->answers=PollQuestionAnswer::query()->where('question_id',$this->question->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.poll.result.poll-question-result');
    }
}
