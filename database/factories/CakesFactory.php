<?php

use Faker\Generator as Faker;

$factory->define(App\cakes::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->word,
        'description'=>$faker->text(50),
        'price'=>$faker->randomFloat(2,0,10)
    ];
});
