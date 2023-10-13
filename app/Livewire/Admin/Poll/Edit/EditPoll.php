<?php

namespace App\Livewire\Admin\Poll\Edit;

use Livewire\Component;
use Poll\Models\Answer;
use Poll\Models\Question;
use Product\Models\Product;

class EditPoll extends Component
{
    public $question,$forType,$products,$title,$poll_type,$for_type_id,$statusPublish;
    public $answers = [],$answer;
    public function mount()
    {
        $this->title=$this->question->title;
        $this->products=Product::query()->get();
        $this->for_type_id=$this->products->first();
        $this->answers=Answer::query()->where('question_id',$this->question->id)->get();
    }
    public function addOption()
    {

        $new_answer=new Answer();
        $new_answer->question_id=$this->question->id;
        $new_answer->save();

        $this->answers = Answer::query()->where('question_id' , $this->question->id)->get();
        $this->render() ;

    }

    public function removeOption()
    {
        $answerToDelete = Answer::where('question_id', $this->question->id)->orderByDesc('id')->first();
        if ($answerToDelete) {
            $answerToDelete->delete();
        }

        $this->answers = Answer::where('question_id', $this->question->id)->get();
    }

    public function updatedForType()
    {
        if($this->forType == 'product'){
            $this->products = Product::all();
        }
    }
    public function render()
    {
        return view('livewire.admin.poll.edit.edit-poll');
    }

    public function save()
    {

        $this->question->title=$this->title;
        $this->question->poll_type=$this->poll_type;
        $this->question->for_type=$this->forType;
        $this->question->for_type_id=$this->for_type_id;
        $this->question->statusPublish=$this->statusPublish;
        $this->question->save();

        return $this->redirect(route('poll.index'));

    }

}
