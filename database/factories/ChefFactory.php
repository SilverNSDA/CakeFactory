<?php

use Faker\Generator as Faker;

$factory->define(App\Chefs::class, function (Faker $faker) {
    return [
        //
        'Firstname'=>$faker->firstname,
        'Lastname'=>$faker->lastname,
        'Middlename'=>$faker->suffix,
        'Title'=>$faker->title,
        'Mobile'=>$faker->tollFreePhoneNumber,
        'Home_phone'=>$faker->phoneNumber,
        'Fax'=>$faker->numerify('#########'),
        'Address1'=>$faker->buildingNumber.' '.$faker->streetName,
        'Address2'=>$faker->city.' '.$faker->country    
    ];
});
