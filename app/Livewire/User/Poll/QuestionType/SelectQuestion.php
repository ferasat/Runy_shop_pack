<?php

namespace App\Livewire\User\Poll\QuestionType;

use Livewire\Component;

class SelectQuestion extends Component
{
    public $question, $selectedAnswer,$currentStep,$maxStep,$allResult;
    public function render()
    {
        return view('livewire.user.poll.question-type.select-question');
    }
    public function mount()
    {

        if (isset($this->allResult[$this->currentStep]))
        {
            $this->selectedAnswer=$this->allResult[$this->currentStep];
        }
    }
    public function nextStep()
    {


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
