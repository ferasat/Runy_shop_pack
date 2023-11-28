<?php

namespace App\Livewire\Admin\Poll\Result;

use Livewire\Component;

class PollQuestionAnswerResult extends Component
{
    public $question,$answer,$y,$count;
    public function mount()
    {
        if ($this->question->total_vote_count!=0)
        {
            $this->count=floor($this->answer->vote_count*100/$this->question->total_vote_count);
        }
        else{
            $this->count=0;
        }
    }
    public function render()
    {
        return view('livewire.admin.poll.result.poll-question-answer-result');
    }
}
