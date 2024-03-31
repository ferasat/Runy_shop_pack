<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


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
}
