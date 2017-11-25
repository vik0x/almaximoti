<?php

use Faker\Generator as Faker;

$factory->define(App\provider::class, function (Faker $faker) {
    return [
    	'name' => $faker->word
        //
    ];
});
