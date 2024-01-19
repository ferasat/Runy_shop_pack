<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Poll\Models\PollQuestionAnswerTemplate;
use Poll\Models\PollTypeAnswerFieldTemplate;

class ShowPollQuestionsTemp extends Component
{
    public $questionTemp,$answersTempFeilds , $answer_title;

    public function render()
    {
        $this->answersTempFeilds = PollQuestionAnswerTemplate::query()->where('poll_question_id', $this->questionTemp->id)->get();

        return view('livewire.admin.poll.temp.show-poll-questions-temp');
    }
    public function addAnswer()
    {

        $newPollTypeAnswerField = new PollTypeAnswerFieldTemplate();
        $newPollTypeAnswerField->type = $this->questionTemp->question_type;
        $newPollTypeAnswerField->answer_title = $this->answer_title;
        $newPollTypeAnswerField->save();

        $newPollQAT = new PollQuestionAnswerTemplate();
        $newPollQAT->poll_question_id = $this->questionTemp->id;
        $newPollQAT->poll_type_answer_field_id = $newPollTypeAnswerField->id;
        $newPollQAT->save();
        $this->reset('answer_title');
        $this->render();
    }
    public function deleteQuestion()
    {
        $answers=PollQuestionAnswerTemplate::query()->where('poll_question_id',$this->questionTemp->id)->get();
        foreach ($answers as $answer)
        {
            $field=PollTypeAnswerFieldTemplate::query()->find($answer->poll_type_answer_field_id);
            $field->delete();
        }
        PollQuestionAnswerTemplate::query()->where('poll_question_id',$this->questionTemp->id)->delete();
        $this->questionTemp->delete();

        $this->dispatch('renderPoll');

    }
}
