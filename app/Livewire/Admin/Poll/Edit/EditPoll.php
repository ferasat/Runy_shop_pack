<?php

namespace App\Livewire\Admin\Poll\Edit;

use Livewire\Component;
use Poll\Models\Answer;
use Poll\Models\PollQuestionAnswer;
use Poll\Models\Question;
use Product\Models\Product;

class EditPoll extends Component
{
    public $poll,$question,$title,$question_type;
    public $answers = [],$answer;

    public function mount()
    {
        //$this->title=$this->question->title;
        $this->answers=PollQuestionAnswer::query()->where('question_id',$this->question->id)->get();
    }

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

    public function render()
    {
        return view('livewire.admin.poll.edit.edit-poll');
    }

    public function save()
    {

        $this->question->title=$this->title;
        $this->question->question_type=$this->poll_type;
        $this->question->save();

        return $this->redirect(route('poll.index'));

    }

}
