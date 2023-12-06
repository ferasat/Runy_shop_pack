<?php

namespace RunyFormBuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunyFormBuilderAnswerItem extends Model
{
    use HasFactory;

    public function maker($question_id , $where_id , $answer_title , $answer_type , $answer_value)
    {

    }
}
