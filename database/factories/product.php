<?php

use Faker\Generator as Faker;

$factory->define(App\product::class, function (Faker $faker) {
    return [
    	'product_type_id' => factory('App\productType')->create()->id,
    	'key' => $faker->unique()->word,
    	'name' => $faker->word
        //
    ];
});
