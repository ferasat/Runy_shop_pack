<?php

namespace App\Livewire\Admin\Service\Create;

use Livewire\Component;
use RunyFormBuilder\Models\RunyFormBuilderAnswerItem;

class RunyFormBuilderQuestionService extends Component
{
    public $question , $title , $answer_type  ,  $answers , $x=1;

    public function mount()
    {
        $this->answers = RunyFormBuilderAnswerItem::query()->where([
            'question_id' => $this->question->id ,
            'where_id' => $this->question->where_id
        ])->orderByDesc('id')->get();

        $this->title = $this->question->title ;
        $this->answer_type = $this->question->answer_type ;


    }
    public function render()
    {
        return view('livewire.admin.service.create.runy-form-builder-question-service');
    }

    public function addAnswer()
    {
        $newAnswer = new RunyFormBuilderAnswerItem();
        $newAnswer->maker($this->question->id , $this->question->where_id , null , $this->answer_type , null);

        $this->answers = RunyFormBuilderAnswerItem::query()->where([
            'question_id' => $this->question->id ,
            'where_id' => $this->question->where_id
        ])->orderByDesc('id')->get();

        $this->render();
    }
}
