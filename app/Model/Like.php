<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'replay_id','user_id',
    ];
}
