<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Poll\Models\PollQuestionAnswerTemplate;

class ModalPollAnswer extends Component
{
    public $poll_question_temp,$poll_answers_temp;
    public function mount()
    {
        $this->poll_answers_temp=PollQuestionAnswerTemplate::query()->where('poll_question_id',$this->poll_question_temp->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.poll.temp.modal-poll-answer');
    }
}
