<?php

use Poll\Models\PollQuestionAnswer;

function get_question_type($question_type)
{
        if ($question_type=="single_choice")
        {
            return "تک انتخابی";
        }elseif ($question_type=="multiple_choice")
        {
            return "چند انتخابی";
        }else{
            return "متنی";
        }
}
function answers_of_question($question_id)
{
//   dd($question_id,PollQuestionAnswer::query()->where('poll_question_id',$question_id)->get());
    return PollQuestionAnswer::query()->where('poll_question_id',$question_id)->get();


}

function poll_genarator($type,$reserve_id)
{
    $res=\App\Models\Reservations::query()->find($reserve_id);

    $param1 = $res->nameLeader . ' ' . $res->familyLeader;
    $param2 =  $res->subject;
    $param3 = dateToJalali_date($res->dateStartTour);
    $param4 = $res->id;
    $question_message=" مسافر گرامی آسمان هفتم:$param1
آیا از                        $param2 خود در تاریخ $param3 رضایت دارید؟";
    if ($res->type=='abs_dom')
    {
        $poll_dom_template=\Poll\Models\Poll::query()->find(1);
        $newPoll=new \Poll\Models\Poll();
        $newPoll->subject="$poll_dom_template->subject نظرسنجی ";
        $newPoll->user_id=$res->user_id;
        $newPoll->save();

        $poll_questions_d=\Poll\Models\PollQuestion::query()->where('poll_id',$poll_dom_template->id)->get();
        foreach ($poll_questions_d as $poll_question)
        {
            $newPollQ=new \Poll\Models\PollQuestion();
            $newPollQ->poll_id=$newPoll->id;
            $newPollQ->question_type=$poll_question->question_type;
            $newPollQ->title=$poll_question->title;
            $newPollQ->save();
            $poll_answers=PollQuestionAnswer::query()->where('question_id',$poll_question->id)->get();
            foreach ($poll_answers as $poll_answer)
            {
                $newPollQA=new PollQuestionAnswer();
                $newPollQA->question_id=$newPollQ->id;
                $newPollQA->name=$poll_answer->name;
                $newPollQA->save();
            }
        }
        return $newPoll->id;


        //dd($poll_dom_template,$res,$poll_questions_d,$newPollQA);
    }

}
function show_answer($poll_type_answer_field_id)
{
    $answer=\Poll\Models\PollTypeAnswerFieldTemplate::query()->find($poll_type_answer_field_id);
    return $answer;

}
function flattenArray($array) {
    $result = [];

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, flattenArray($value));
        } else {
            $result[] = $value;
        }
    }

    return $result;
}



