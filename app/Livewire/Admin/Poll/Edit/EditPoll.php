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
        $this->validate([
           'title'=>'required'
        ]);
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
        $this->validate(['subject'=>'required']);
        $this->poll->subject=$this->subject;
        $this->poll->poll_type=$this->poll_type;
        $this->poll->save();

        return $this->redirect(route('poll.index'));

    }
    public function sendSMS()
    {
        $customer=Customer::query()->find($this->customer_id);
        $poll_id=$this->poll->id;
        $this->SMS_text="$customer->name $customer->family عزیز لطفا در نظر سنجی زیر شرکت کنید لینک نظر سنجی https://mortazavistore.ir/poll/show/$poll_id ";
        //$this->SMS_text="$customer->name $customer->family ";
        $phone=$customer->cell;
//        $api = new GhasedakApi('01b0b9662b2eeafb88e875a4ec39d7d3096dc85c8fa4f99c19074d92ab13a70d');
//        $api->SendSimple(
//            '09908747495',          // receptor
//            $this->SMS_text,  // message
//            "300002525"      // choose a line number from your account
//        );
        if ($this->poll_type=="single_person")
        {


            try
            {
                $api = new GhasedakApi('01b0b9662b2eeafb88e875a4ec39d7d3096dc85c8fa4f99c19074d92ab13a70d');
                $api->SendSimple(
                    $phone,          // receptor
                    $this->SMS_text,  // message
                    "300002525"      // choose a line number from your account
                );
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
                $newPollQ->question_type=$question->question_type;
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
                $api = new GhasedakApi('01b0b9662b2eeafb88e875a4ec39d7d3096dc85c8fa4f99c19074d92ab13a70d');
                $api->SendSimple(
                    $phone,          // receptor
                    $this->SMS_text,  // message
                    "300002525"      // choose a line number from your account
                );
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
