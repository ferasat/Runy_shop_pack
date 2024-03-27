<?php

namespace MsgBox\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsgBox extends Model
{
    use HasFactory;

    public static function create($title , $type ,$status=null, $description , $creator_user_id , $for_user_name , $for_user_id=null ,
                                  $for_item ,$for_item_id=null ,$item_communication=null ,$attach_file=null  , $importance='low')
    {
        $newMsg = new MsgBox();
        $newMsg->title = $title ;
        $newMsg->type = $type ;
        $newMsg->description = $description ;
        $newMsg->creator_user_id = $creator_user_id ;
        $newMsg->for_user_id = $for_user_id ;
        $newMsg->for_user_name = $for_user_name ;
        $newMsg->for_item = $for_item ;
        $newMsg->for_item_id = $for_item_id ;
        $newMsg->item_communication = $item_communication ;
        $newMsg->attach_file = $attach_file ;
        $newMsg->status = $status ;
        $newMsg->importance = $importance ;
        $newMsg->save() ;
    }
}
