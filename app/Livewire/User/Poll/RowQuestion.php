<?php

namespace App\Livewire\User\Poll;

use Livewire\Component;

class RowQuestion extends Component
{
    public $poll, $question, $selectedAnswer,$currentStep,$maxStep,$allResult;
    public function render()
    {
        return view('livewire.user.poll.row-question');
    }
}
