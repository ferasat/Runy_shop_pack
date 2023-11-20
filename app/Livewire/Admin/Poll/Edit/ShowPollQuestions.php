<?php

namespace App\Livewire\Admin\Poll\Edit;

use Livewire\Component;
use Poll\Models\PollQuestion;
use Poll\Models\PollQuestionAnswer;

class ShowPollQuestions extends Component
{
    public $question   , $vote_count , $answers , $answer_name;
    public function render()
    {
        $this->answers = PollQuestionAnswer::query()->where('question_id', $this->question->id)->get();


        return view('livewire.admin.poll.edit.show-poll-questions');
    }

    public function addAnswer()
    {
        $newAswer = new PollQuestionAnswer();
        $newAswer->question_id = $this->question->id ;
        $newAswer->name = $this->answer_name ;
        $newAswer->save() ;
        $this->reset('answer_name');
        $this->render() ;
    }
    public function deleteQuestion()
    {
       $answers=PollQuestionAnswer::query()->where('question_id',$this->question->id)->get();
       if ($answers)
       {
           PollQuestionAnswer::query()->where('question_id',$this->question->id)->get();
       }
       $this->question->delete();

       $this->dispatch('renderPoll');

    }
}
