<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Catagory;
use Faker\Generator as Faker;

$factory->define(Catagory::class, function (Faker $faker) {
    $word=$faker->word;
    return [
        'name'=>$word,
        'slug'=>str_slug($word),
    ];
});
