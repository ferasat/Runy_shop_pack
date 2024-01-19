<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;
use Poll\Models\PollTypeAnswerField;

class PollRowAnswerResult extends Component
{
    public $poll_answer,$poll_type_answer_field,$isText;
    public function mount()
    {
        $this->poll_type_answer_field=PollTypeAnswerField::query()->find($this->poll_answer->poll_type_answer_field_id);

        if ($this->poll_type_answer_field->type=="text")
        {
            $this->isText=true;
        }
    }
    public function render()
    {
        return view('livewire.admin.poll.result.poll-row-answer-result');
    }
}
