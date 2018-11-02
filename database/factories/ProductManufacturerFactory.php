<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product\ProductManufacturer::class, function (Faker $faker) {
	$name = $faker->sentence(3, true);
    return [
        'name' => $name,
        'slug' => str_slug($name),
    ];
});
