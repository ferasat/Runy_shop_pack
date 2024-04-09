<?php

namespace Customer\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLog extends Model
{
    use HasFactory;

    public static function newLog($customer_id , $full_name , $department=null , $log_subject , $note=null , $date=null  )
    {
        $newLog = new CustomerLog();
        $newLog->customer_id = $customer_id ;
        $newLog->full_name = $full_name ;
        $newLog->department = $department ;
        $newLog->log_subject = $log_subject ;
        $newLog->note = $note ;
        $newLog->date = $date ;
        $newLog->save() ;

        return $newLog ;
    }
}
