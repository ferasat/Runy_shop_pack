<?php

namespace Poll\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PollTypeAnswerField extends Model
{
    use HasFactory;
    protected $fillable = [
        'value',
    ];
}
