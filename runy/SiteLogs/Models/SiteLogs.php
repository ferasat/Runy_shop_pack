<?php

namespace SiteLogs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteLogs extends Model
{
    use HasFactory;


    public static function new_Log($log_name , $description , $type , $type_id , $event , $format='text' , $causer_id=null , $user_ip=null  )
    {
        $newLog = new SiteLogs();
        $newLog->log_name = $log_name ;
        $newLog->description = $description ;
        $newLog->type = $type ;
        $newLog->type_id = $type_id ;
        $newLog->event = $event ;
        $newLog->causer_id = $causer_id ;
        $newLog->user_ip = $user_ip ;
        $newLog->format = $format ;
        $newLog->save();

        return $newLog->id ;
    }
}
