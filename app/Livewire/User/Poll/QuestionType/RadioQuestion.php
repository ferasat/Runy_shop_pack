<?php

namespace App\Livewire\User\Poll\QuestionType;

use Livewire\Component;

class RadioQuestion extends Component
{
    public $question, $selectedAnswer,$maxStep,$currentStep,$allResult;
    public function mount()
    {
        //dd($this->question , $this->allResult , $this->currentStep);
        if (isset($this->allResult[$this->currentStep]))
        {
            $this->selectedAnswer=$this->allResult[$this->currentStep];
        }
    }
    public function render()
    {
        return view('livewire.user.poll.question-type.radio-question');
    }
    public function nextStep()
    {
        //dd($this->selectedAnswer);

        $this->validate([
            'selectedAnswer' => 'required',
        ]);

        $this->dispatch('answerSelected', selectedAnswer: $this->selectedAnswer,currentStep: $this->currentStep);


    }
    public function previousStep()
    {
        $this->currentStep--;

        $this->dispatch('prevQuestion',currentStep: $this->currentStep);

    }
}
