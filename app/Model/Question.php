<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Question extends Model
{

    protected $fillable = [
        'title', 'slug', 'body','catagory_id','user_id',
    ];

    public function getRouteKey()
    {
        return 'slug';
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replys(){
        return $this->hasMany(Reply::class);
    }
    public function catagory(){
        return $this->belongsTo(Catagory::class);
    }
}
