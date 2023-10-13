<?php

namespace App\Livewire\User\Poll;

use Livewire\Component;
use Poll\Models\Answer;
use Poll\Models\Question;

class ShowPoll extends Component
{
    public $type,$item,$question,$options,$answer;
    public function mount()
    {

        $this->options=Answer::query()->where('question_id',$this->question->id)->get();
    }
    public function render()
    {
        return view('livewire.user.poll.show-poll');
    }
    public function save_answer()
    {
        $answer=Answer::query()->find($this->answer);
        $answer->vote_count++;
        $answer->save();
        $question=Question::query()->find($this->question->id);
        $question->total_vote_count++;
        $question->save();
    }
}
