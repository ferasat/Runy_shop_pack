<?php

namespace App\Livewire\User\Poll;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Poll\Models\Poll;
use Poll\Models\PollQuestion;
use Poll\Models\PollQuestionAnswer;
use Poll\Models\PollQuestionAnswerTemplate;
use Poll\Models\PollQuestionTemplate;
use Poll\Models\PollTypeAnswerField;
use Poll\Models\PollTypeAnswerFieldTemplate;

class ShowCustomerInfoPoll extends Component
{
    public $pollTemp,$first_name,$last_name,$mobile,$showPoll=false,$showError=false;

    public function mount()
    {

        if (Auth::check()){
            $this->first_name = Auth::user()->name ;
            $this->last_name = Auth::user()->family ;
            $this->mobile = Auth::user()->cellPhone ;
        }
    }
    public function render()
    {
        return view('livewire.user.poll.show-customer-info-poll');
    }
    public function go_to_poll()
    {
        $this->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'mobile'=>'required',
        ]);
        $existPoll=Poll::query()->where(['mobile'=>$this->mobile,'poll_temp_id'=>$this->pollTemp->id,'status'=>1])->first();
        if (!$existPoll)
        {
            $newPoll=new Poll();
            $newPoll->name=$this->pollTemp->name;
            $newPoll->poll_temp_id=$this->pollTemp->id;
            $newPoll->first_name=$this->first_name;
            $newPoll->last_name=$this->last_name;
            $newPoll->mobile=$this->mobile;
            $newPoll->save();

            $password = substr($this->mobile, -4).rand(100, 999).$newPoll->id;

            if (!Auth::check()){
                $existUser=User::query()->where('cellPhone',$this->mobile)->first();

                if (!$existUser)
                {
                    $newUser=new User();
                    $newUser->name=$this->first_name;
                    $newUser->family=$this->last_name;
                    $newUser->cellPhone =$this->mobile;
                    $newUser->email=$this->mobile."@mortazavistore.ir";
                    $newUser->password=$password;
                    $newUser->save();
                    $user_id=$newUser->id;
                }else{
                    $user_id=$existUser->id;
                }
            }else{
                $user_id=Auth::id();
            }

            $newPoll->user_id=$user_id;
            $poll_questions_temp=PollQuestionTemplate::query()->where('poll_id',$this->pollTemp->id)->get();
            $newPoll->questions_count=count($poll_questions_temp);
            $newPoll->save();

            foreach ($poll_questions_temp as $index=>$pq_temp)
            {
                $newQuestion=new PollQuestion();
                $newQuestion->question_title=$pq_temp->question_title;
                $newQuestion->poll_id=$newPoll->id;
                $newQuestion->question_type=$pq_temp->question_type;
                $newQuestion->step=$index+1;
                $newQuestion->save();

                $poll_question_answers_temp=PollQuestionAnswerTemplate::query()->where('poll_question_id',$pq_temp->id)->get();
                foreach ($poll_question_answers_temp as $pqa_temp)
                {
                    $poll_type_answer_field=PollTypeAnswerFieldTemplate::query()->find($pqa_temp->poll_type_answer_field_id);
                    $new_poll_type_answer_field=new PollTypeAnswerField();
                    $new_poll_type_answer_field->answer_title=$poll_type_answer_field->answer_title;
                    $new_poll_type_answer_field->type=$poll_type_answer_field->type;
                    $new_poll_type_answer_field->poll_type_answer_field_template_id=$pqa_temp->poll_type_answer_field_id;
                    $new_poll_type_answer_field->save();

                    $new_poll_question_answer=new PollQuestionAnswer();
                    $new_poll_question_answer->poll_question_id=$newQuestion->id;
                    $new_poll_question_answer->poll_type_answer_field_id=$new_poll_type_answer_field->id;


                    $new_poll_question_answer->save();
                }
            }
            return redirect("/poll?poll=$newPoll->id");
        }else{
            $this->showError=true;
        }

    }
}
