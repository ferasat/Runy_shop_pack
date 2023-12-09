<?php

namespace RunyFormBuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunyFormBuilderAnswerItem extends Model
{
    use HasFactory;

    public function maker($question_id , $where_id , $answer_title , $answer_type , $answer_value)
    {
        $newAns = new RunyFormBuilderAnswerItem();
        $newAns->question_id = $question_id ;
        $newAns->where_id = $where_id ;
        $newAns->answer_title = $answer_title ;
        $newAns->answer_type = $answer_type ;
        $newAns->answer_value = $answer_value ;
        $newAns->save() ;
    }
}
