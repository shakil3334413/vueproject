<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Catagory;
use App\Model\Question;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Foundation\Auth\User as IlluminateUser;

$factory->define(Question::class, function (Faker $faker) {
    $title=$faker->sectence;
    return [
        'title'=>$title,
        'slug'=>str_slug($title),
        'body'=>$faker->text,
        'catagory_id'=>function (){
            return Catagory::all()->random();
        },
        'user_id'=>function (){
            return User::all()->random();
        }


    ];
});
