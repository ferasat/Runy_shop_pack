<?php

namespace RunyFormBuilder\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunyFormBuilderQuestion extends Model
{
    use HasFactory;

    public function maker($where_id , $title , $answer_type ,$runy_form_id, $answer_count=null){
        $newQuestion = new RunyFormBuilderQuestion();
        $newQuestion->where_id = $where_id ;
        $newQuestion->title = $title ;
        $newQuestion->answer_type = $answer_type ;
        $newQuestion->answer_count = $answer_count ;
        $newQuestion->runy_form_id = $runy_form_id ;
        $newQuestion->save() ;
    }
}
