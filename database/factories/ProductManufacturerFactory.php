<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product\ProductManufacturer::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3, true),
    ];
});
