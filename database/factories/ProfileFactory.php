<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->firstname.' '.$faker->suffix.' '.$faker->lastname,
        'dateOfBirth'=>$faker->datetime,
        'selfIntroduction'=>$faker->text(250),
        'occupation'=>$faker->text(10)
    ];
});
