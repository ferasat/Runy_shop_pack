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
    return PollQuestionAnswer::query()->where('question_id',$question_id)->get();

}
