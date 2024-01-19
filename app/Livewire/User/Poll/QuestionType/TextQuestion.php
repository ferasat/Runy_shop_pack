<?php

namespace App\Livewire\User\Poll\QuestionType;

use Livewire\Component;
use Poll\Models\PollQuestionAnswer;

class TextQuestion extends Component
{
    public $question, $selectedAnswer,$currentStep,$maxStep,$allResult,$answer;
    public function render()
    {
        return view('livewire.user.poll.question-type.text-question');
    }
    public function mount()
    {
        $this->answer=PollQuestionAnswer::query()->where('poll_question_id',$this->question->id)->first();

        if (isset($this->allResult[$this->currentStep]))
        {
            $this->selectedAnswer=$this->allResult[$this->currentStep];
        }
    }

    public function nextStep()
    {


        //dd($this->selectedAnswer);
        $this->validate([
            'selectedAnswer' => 'required',
        ]);
        $a[$this->answer->id]=$this->selectedAnswer;
        $isText=true;
        $this->dispatch('answerSelected', selectedAnswer: $a,currentStep: $this->currentStep,isText:$isText);

    }
    public function previousStep()
    {
        $this->currentStep--;
        $this->dispatch('prevQuestion',currentStep: $this->currentStep);
    }
}
