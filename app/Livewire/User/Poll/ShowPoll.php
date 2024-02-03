<?php

namespace App\Livewire\User\Poll;

use App\Models\User;
use Customer\Models\Customer;
use Customer\Models\CustomerLog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Poll\Models\PollQuestion;
use Poll\Models\PollTypeAnswerField;

class ShowPoll extends Component
{
    public $poll, $questions, $currentStep,$maxStep,$result=[],$resultText=[],$show_success=false,$allResult, $showEndBtn=false;
    protected $listeners = ['answerSelected','prevQuestion'];

    public function mount()
    {
        $this->maxStep=$this->poll->questions_count;
        $this->currentStep = 1;
        $this->loadQuestions();
        //dd($this->poll);
    }

    public function render()
    {
        return view('livewire.user.poll.show-poll');
    }

    public function loadQuestions()
    {
        $this->questions = PollQuestion::query()
            ->where('poll_id', $this->poll->id)
            ->where('step', $this->currentStep)
            ->get();
         if ($this->poll->questions_count < $this->currentStep ){
             $this->showEndBtn = true ;
         }
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
                $answer_field_text->value=$text;
                $answer_field_text->save();
            }

        }

        $this->poll->status=1;
        $this->poll->save();
        $this->show_success=true;

        if (Auth::check()){
            $customer = Customer::query()->where('customer_user_id' , Auth::id())->first();
            if ($customer != null){
                $newLog = new CustomerLog();
                $newLog->customer_id = $customer->id ;
                $newLog->full_name = $customer->name.' '.$customer->family ;
                $newLog->department = 'نظرسنجی' ;
                $newLog->log_subject = $this->poll->name ;
                $newLog->note = 'شرکت در نظر سنجی '.$this->poll->name ;
                $newLog->save() ;
            }
        }else{
            $customer = Customer::query()->where('cell' , $this->poll->mobile)->first();
            if ($customer != null){
                $newLog = new CustomerLog();
                $newLog->customer_id = $customer->id ;
                $newLog->full_name = $customer->name.' '.$customer->family ;
                $newLog->department = 'نظرسنجی' ;
                $newLog->log_subject = $this->poll->name ;
                $newLog->note = 'شرکت در نظر سنجی '.$this->poll->name ;
                $newLog->save() ;
            }else {
                $newCustomer = new Customer();
                $newCustomer->name = $this->poll->name ;
                $newCustomer->family = $this->poll->family ;
                $newCustomer->cell = $this->poll->mobile ;

                $newUser = new User();
                $newUser->name = $this->poll->name ;
                $newUser->family = $this->poll->family ;
                $newUser->cellPhone = $this->poll->mobile ;
                $newUser->password = bcrypt($this->poll->mobile) ;
                $newUser->email = $this->poll->mobile.'@'.'ms.ir' ;
                $newUser->save() ;

                $newCustomer->customer_user_id = $newUser->id ;
                $newCustomer->save() ;
            }
        }

    }
}
