<?php

namespace Post\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'shortDescription',
        'statusPublish',
        'specialPin',
        'user_id'
    ];
}
