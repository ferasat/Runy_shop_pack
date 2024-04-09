<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Enums\LevelUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable ;


    protected $fillable = [
        'name',
        'family',
        'cellPhone',
        'status',
        'levelUser',
        'levelPermission',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function isAdmin()
    {
        if (self::query()->status > 8) {
            return true ;
        }else {
            return false ;
        }
    }

    public static function isActive()
    {
        if (self::query()->status == 'active') {
            return true ;
        }else {
            return false ;
        }
    }

    public static function createFastUser($name , $family , $cell , $email=null , $password=null)
    {
        if ($password == null){
            $password = rand(10008000 , 99999999);
        }
        if ($email == null) {
            $email = $cell.'@rs.ir';
        }
        $newUser = new User();
        $newUser->name = $name ;
        $newUser->family = $family ;
        $newUser->cellPhone = $cell ;
        $newUser->email = $email ;
        $newUser->password = bcrypt($password) ;
        $newUser->save() ;

        return $newUser ;
    }


}
