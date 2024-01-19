<?php

namespace App\Livewire\Admin\Poll\Temp;

use Livewire\Component;
use Poll\Models\Poll;
use Poll\Models\PollQuestionTemplate;

class RowPollTemp extends Component
{
    public $poll_temp,$poll_questions_temp,$polls;
    public function mount()
    {
        $this->polls=Poll::query()->where('poll_temp_id',$this->poll_temp->id)->get();
        $this->poll_questions_temp=PollQuestionTemplate::query()->where('poll_id',$this->poll_temp->id)->where('question_type','!=','text')->get();
        // dd( $this->poll_questions_temp);
    }
    public function render()
    {
        return view('livewire.admin.poll.temp.row-poll-temp');
    }
}
