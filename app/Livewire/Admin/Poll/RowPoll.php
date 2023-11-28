<?php

namespace App\Livewire\Admin\Poll;

use Livewire\Component;
use Poll\Models\Poll;
use Poll\Models\PollQuestion;
use Poll\Models\PollQuestionAnswer;

class RowPoll extends Component
{
    public $poll,$questions,$answers;
    public $showModal = false;
    public function mount()
    {
        //dd($this->poll,$this->question,$this->answers);
        $this->questions=PollQuestion::query()->where('poll_id',$this->poll->id)->get();

    }

    public function render()
    {
        return view('livewire.admin.poll.row-poll');
    }
    public function remove($poll_id)
    {

        $questions=PollQuestion::query()->where('poll_id',$poll_id)->get();
        foreach ($questions as $question)
        {
            PollQuestionAnswer::query()->where('question_id',$question->id)->delete();
        }
        PollQuestion::query()->where('poll_id',$poll_id)->delete();
        Poll::query()->findOrFail($poll_id)->delete();
        $this->showModal = false;
        $this->dispatch('updatePolls');
    }
}
