<?php

namespace App\Livewire\Admin\Poll;

use Livewire\Component;
use Poll\Models\Answer;

class RowPoll extends Component
{
    public $question,$answers;
    public function mount()
    {
        $this->answers=Answer::query()->where('question_id',$this->question->id)->get();
    }
    public function render()
    {
        return view('livewire.admin.poll.row-poll');
    }
}
