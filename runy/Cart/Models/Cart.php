<?php

namespace Cart\Models;

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

}
