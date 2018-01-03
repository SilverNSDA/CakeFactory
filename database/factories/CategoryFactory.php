<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        //
        'tag'=> $faker->lexify('???'),
        'name'=>$faker->word,
        'description'=>$faker->text(50)
    ];
});
