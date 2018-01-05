<?php

use Faker\Generator as Faker;
use App\cakes;

$factory->define(App\Cart::class, function (Faker $faker) {
    $cakes = cakes::all();
    $cake_ids=[];
    foreach($cakes as $cake){
        array_push($cake_ids,$cake->id);
    }
    return [
        //
        'user_id'=>1,
        'cakes_id'=>array_rand($cake_ids),
        'amount'=>$faker->randomDigit
    ];
});
