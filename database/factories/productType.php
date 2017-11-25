<?php

use Faker\Generator as Faker;

$factory->define(App\productType::class, function (Faker $faker) {
    return [
    	'name' => $faker->word
        //
    ];
});
