<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Poll\Models\PollTypeAnswerField;
use Poll\Models\PollTypeAnswerFieldTemplate;

class ModalRowPollAnswer extends Component
{
    public $poll_answer_temp, $poll_answer_field_template, $poll_answer_fields, $poll_answer_fields_total, $count;

    public function mount()
    {
        $this->initializeData();
    }

    private function initializeData()
    {
        $this->poll_answer_field_template = PollTypeAnswerFieldTemplate::find($this->poll_answer_temp->poll_type_answer_field_id);
        $this->poll_answer_fields_total = PollTypeAnswerField::where('poll_type_answer_field_template_id', $this->poll_answer_field_template->id)->count();
        $this->poll_answer_fields = PollTypeAnswerField::where(['poll_type_answer_field_template_id' => $this->poll_answer_field_template->id, 'value' => 1])->count();
        $this->count = $this->calculatePercentage();
    }

    private function calculatePercentage()
    {
        return $this->poll_answer_fields_total > 0 ? floor($this->poll_answer_fields * 100 / $this->poll_answer_fields_total) : 0;
    }
    public function render()
    {
        return view('livewire.admin.poll.temp.modal-row-poll-answer');
    }
}
