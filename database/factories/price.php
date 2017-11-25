<?php

use Faker\Generator as Faker;

$factory->define(App\price::class, function (Faker $faker) {
    return [
    	'product_id' => factory('App\product')->create()->id,
		'price' => $faker->randomFloat(2,0,999999),
        //
    ];
});
