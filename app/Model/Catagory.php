<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $fillable = [
        'name', 'slug',
    ];

}
