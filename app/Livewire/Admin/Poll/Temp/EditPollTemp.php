<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Poll\Models\PollQuestionAnswerTemplate;
use Poll\Models\PollQuestionTemplate;
use Poll\Models\PollTypeAnswerFieldTemplate;

class EditPollTemp extends Component
{
    public $pollTemp, $questionsTemp , $question_title, $question_type,$name, $poll_type, $show_success=false;
    protected $listeners = ['renderPoll' => '$refresh'];

    public function mount()
    {
        $this->question_type='radio';
        $this->name=$this->pollTemp->name;

    }
    public function render()
    {
        $this->questionsTemp = PollQuestionTemplate::query()->where('poll_id',$this->pollTemp->id)->orderByDesc('id')->get();

        return view('livewire.admin.poll.temp.edit-poll-temp');
    }


    public function addQuestion()
    {

        $this->validate([
            'question_title' => 'required',
        ]);
        $newQues = new PollQuestionTemplate();
        $newQues->poll_id = $this->pollTemp->id ;
        $newQues->question_title = $this->question_title ;
        $newQues->question_type = $this->question_type ;
        $newQues->save();

        if ($this->question_type=="text")
        {
            $newPollTypeAnswerField = new PollTypeAnswerFieldTemplate();
            $newPollTypeAnswerField->type = $this->question_type;
            $newPollTypeAnswerField->answer_title = "جواب سوال ".$this->question_title;
            $newPollTypeAnswerField->save();

            $newPollQAT = new PollQuestionAnswerTemplate();
            $newPollQAT->poll_question_id = $newQues->id;
            $newPollQAT->poll_type_answer_field_id = $newPollTypeAnswerField->id;
            $newPollQAT->save();
        }

        $this->reset('question_title');
        $this->render();
    }

    public function save()
    {

        $this->pollTemp->name=$this->name;
        $this->pollTemp->save();

        return redirect(route('poll.index.temp'));

    }
}
