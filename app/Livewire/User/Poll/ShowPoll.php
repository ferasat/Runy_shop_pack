<?php

namespace App\Livewire\User\Poll;

use Livewire\Component;
use Poll\Models\PollQuestion;
use Poll\Models\PollTypeAnswerField;

class ShowPoll extends Component
{
    public $poll, $questions, $currentStep,$maxStep,$result=[],$resultText=[],$show_success=false,$allResult;
    protected $listeners = ['answerSelected','prevQuestion'];

    public function mount()
    {
        $this->maxStep=$this->poll->questions_count;
        $this->currentStep = 1;
        $this->loadQuestions();
        //dd($this->poll);
    }

    public function loadQuestions()
    {
        $this->questions = PollQuestion::query()
            ->where('poll_id', $this->poll->id)
            ->where('step', $this->currentStep)
            ->get();

    }
    public function render()
    {
        return view('livewire.user.poll.show-poll');
    }
    #[On('prevQuestion')]
    public function prevQuestion($currentStep)
    {
        $this->allResult = $this->result + $this->resultText;
        ksort($this->allResult);

        $this->currentStep = $currentStep;
        $this->loadQuestions();
    }

    #[On('answerSelected')]
    public function answerSelected($selectedAnswer,$currentStep,$isText=false)
    {
        if ($isText)
        {
            $this->resultText[$currentStep]=$selectedAnswer;
        }
        else{
            $this->result[$currentStep]=$selectedAnswer;
        }

        $this->currentStep++;
        $this->loadQuestions();

    }
    public function send()
    {
        //dd($this->result,$this->resultText);




        $resultArray = flattenArray($this->result);

        $answer_fields = PollTypeAnswerField::query()
            ->whereIn('id', $resultArray)
            ->get();

        foreach ($answer_fields as $answer_field) {
            $answer_field->update(['value' => 1]);
        }

        foreach ($this->resultText as $texts){
            foreach ($texts as $index=>$text)
            {
                $answer_field_text= PollTypeAnswerField::query()->find($index);
//                dd($index,$text,$answer_field_text);
                $answer_field_text->value=$text;
                $answer_field_text->save();
            }

        }
        $this->poll->status=1;
        $this->poll->save();
        $this->show_success=true;

    }
}
