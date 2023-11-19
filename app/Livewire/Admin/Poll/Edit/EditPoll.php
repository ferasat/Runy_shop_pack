<?php

namespace App\Livewire\Admin\Poll\Edit;

use Livewire\Component;

use Poll\Models\PollQuestion;
use Poll\Models\PollQuestionAnswer;

use Product\Models\Product;

class EditPoll extends Component
{
    public $poll, $questions , $title, $poll_type;

    public function mount()
    {

    }

    public function render()
    {
        $this->questions = PollQuestion::query()->where('poll_id',$this->poll->id)->orderByDesc('id')->get();
        //dd($this->questions);
        return view('livewire.admin.poll.edit.edit-poll');
    }

    public function addQuestion()
    {
        $newQues = new PollQuestion();
        $newQues->poll_id = $this->poll->id ;
        $newQues->title = $this->title ;
        $newQues->poll_type = $this->poll_type ;
        $newQues->save() ;

        $this->render();
    }

/*
    public function addAnswer()
    {

        $new_answer=new PollQuestionAnswer();
        $new_answer->question_id=$this->question->id;
        $new_answer->save();

        $this->answers = PollQuestionAnswer::query()->where('question_id' , $this->question->id)->get();
        $this->render() ;

    }

    public function removeAnswer()
    {
        $answerToDelete = PollQuestionAnswer::where('question_id', $this->question->id)->orderByDesc('id')->first();
        if ($answerToDelete) {
            $answerToDelete->delete();
        }

        $this->answers = PollQuestionAnswer::where('question_id', $this->question->id)->get();
    }



    public function save()
    {

        $this->question->title=$this->title;
        $this->question->question_type=$this->poll_type;
        $this->question->save();

        return $this->redirect(route('poll.index'));

    }*/

}
