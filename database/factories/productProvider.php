<?php

use Faker\Generator as Faker;

$factory->define(App\productProvider::class, function (Faker $faker) {
    return [
    	'product_id' => factory('App\product')->create()->id,
    	'provider_id' => factory('App\provider')->create()->id,
    	'key' => $faker->word,
    	'price' => $faker->randomFloat(2,0,999999)

    ];
});
