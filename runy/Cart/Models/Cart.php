<?php

namespace Cart\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' ,
        'family' ,
        'cell' ,
        'user_id' ,
        'status'
    ];

    public static function createFastCart($name , $family , $cell , $user_id=null)
    {

        $newCart = new Cart();
        $newCart->name = $name ;
        $newCart->family = $family ;
        $newCart->cell = $cell ;
        $newCart->user_id = $user_id ;
        $newCart->save() ;

        return $newCart ;
    }

}
