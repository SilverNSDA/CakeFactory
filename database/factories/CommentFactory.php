<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->sentence,
        'body'=>$faker->text(150)
    ];
});
