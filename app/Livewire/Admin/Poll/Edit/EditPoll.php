<?php

namespace App\Livewire\Admin\Poll\Edit;

use Customer\Models\Customer;
use Ghasedak\GhasedakApi;
use Livewire\Component;

use Poll\Models\Poll;
use Poll\Models\PollQuestion;
use Poll\Models\PollQuestionAnswer;

use Product\Models\Product;

class EditPoll extends Component
{
    public $poll, $questions , $title, $question_type,$subject,
            $customers,$poll_type,$customer_id,$SMS_text,
           $show_success=false;
    protected $listeners = ['renderPoll' => '$refresh'];

    public function mount()
    {
        $this->question_type='single_choice';
        $this->subject=$this->poll->subject;
        $this->poll_type=$this->poll->poll_type;
        $this->customers=Customer::all();
    }

    public function render()
    {
        $this->questions = PollQuestion::query()->where('poll_id',$this->poll->id)->orderByDesc('id')->get();
        //dd($this->questions);

        return view('livewire.admin.poll.edit.edit-poll');
    }

    public function addQuestion()
    {
        $newQues = new PollQuestion();
        $newQues->poll_id = $this->poll->id ;
        $newQues->title = $this->title ;
        $newQues->question_type = $this->question_type ;
        $newQues->save() ;
        if ($this->question_type=="box_text")
        {
            $newQuesAnswer = new PollQuestionAnswer();
            $newQuesAnswer->question_id = $newQues->id ;
            $newQuesAnswer->save() ;
        }

        $this->reset('title');
        $this->render();
    }


    public function save()
    {

        $this->poll->subject=$this->subject;
        $this->poll->poll_type=$this->poll_type;
        $this->poll->save();

        return $this->redirect(route('poll.index'));

    }
    public function sendSMS()
    {

        if ($this->poll_type=="single_person")
        {
            $customer=Customer::query()->find($this->customer_id);
            $poll_id=$this->poll->id;
            $this->SMS_text="$customer->name $customer->family عزیز لطفا در نظر سنجی زیر شرکت کنید لینک نظر سنجی https://mortazavistore.ir/poll/show/$poll_id ";
            $phone=$customer->cell;

            try
            {
//                $api = new GhasedakApi('46767fce136439dc9cced4f7e10dd78a8f22f171af45d7fc2d9f61c53a0f4522');
//                $api->SendSimple(
//                    $phone,          // receptor
//                    $this->SMS_text,  // message
//                    "300002525"      // choose a line number from your account
//                );
                $this->show_success=true;
            }
            catch(\Ghasedak\Exceptions\ApiException $e){
                echo $e->errorMessage();
            }
            catch(\Ghasedak\Exceptions\HttpException $e){
                echo $e->errorMessage();
            }




        }else{
            $newPoll=new Poll();
            $newPoll->subject=$this->poll->subject;
            $newPoll->poll_type=$this->poll_type;
            $newPoll->save();


            foreach ($this->questions as $question)
            {
                $newPollQ=new PollQuestion();
                $newPollQ->poll_id=$newPoll->id;
                $newPollQ->title=$question->title;
                $newPollQ->question_type=$question->type;
                $newPollQ->save();

                    $old_answers=PollQuestionAnswer::query()->where('question_id',$question->id)->get();
                    foreach ($old_answers as $old_answer)
                    {
                        $newPollQA=new PollQuestionAnswer();
                        $newPollQA->name=$old_answer->name;
                        $newPollQA->question_id=$newPollQ->id;
                        $newPollQA->save();
                    }


            }
            $customer=Customer::query()->find($this->customer_id);
            $poll_id=$newPoll->id;
            $this->SMS_text="$customer->name $customer->family عزیز لطفا در نظر سنجی زیر شرکت کنید لینک نظر سنجی https://mortazavistore.ir/poll/show/$poll_id ";
            $phone=$customer->cell;
            try
            {
//                $api = new GhasedakApi('b267a45bc4bccbbabe99555396023340c9e8e174116fdd1f33a68a63c5835efd');
//                $api->SendSimple(
//                    $phone,          // receptor
//                    $this->SMS_text,  // message
//                    "300002525"      // choose a line number from your account
//                );
                $this->show_success=true;
            }
            catch(\Ghasedak\Exceptions\ApiException $e){
                echo $e->errorMessage();
            }
            catch(\Ghasedak\Exceptions\HttpException $e){
                echo $e->errorMessage();
            }


        }

    }

}
