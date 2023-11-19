<?php

namespace App\Livewire\Admin\Poll\Edit;

use Livewire\Component;
use Poll\Models\PollQuestionAnswer;

class ShowPollQuestions extends Component
{
    public $question  , $name , $vote_count , $answers , $answer_name;
    public function render()
    {
        $this->answers = PollQuestionAnswer::query()->where('question_id', $this->question->id)->get();
        //dd($this->answers ,$this->question->id );
        return view('livewire.admin.poll.edit.show-poll-questions');
    }

    public function addAnswer()
    {
        $newAswer = new PollQuestionAnswer();
        $newAswer->question_id = $this->question->id ;
        $newAswer->name = $this->name ;
        $newAswer->save() ;

        $this->render() ;
    }
}
