<?php

namespace RunyWarehousing\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RunyWMS extends Model
{
    use HasFactory;

    public function create($title , $place , $type , $capacity )
    {
        $newWMS = new RunyWMS();
        $newWMS->title = $title ;
        $newWMS->place = $place ;
        $newWMS->type = $type ;
        $newWMS->capacity = $capacity ;
        $newWMS->save() ;

        return $newWMS ;
    }
}
