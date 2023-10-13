<?php

namespace App\Livewire\Admin\Poll\Edit;

use Livewire\Component;
use Poll\Models\Answer;

class AddAnswer extends Component
{
    public $answer,$question,$x,$option;
    public function mount()
    {
      //  dd($this->answer);
        $this->answer=Answer::query()->find($this->answer->id);
     $this->option=$this->answer->option;

    }
    public function render()
    {
        return view('livewire.admin.poll.edit.add-answer');
    }
    public function updated()
    {
        $upAnswer=Answer::query()->find($this->answer->id);
        $upAnswer->option=$this->option;
        $upAnswer->save();
    }
//    public function removeOption()
//    {
//
//        $answer = Answer::query()->find($this->answer->id);
//        $answer->delete();
//        $this->answers = Answer::query()->where('question_id', $this->question->id)->get();
//        $this->render();
//
//    }


}
