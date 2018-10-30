<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product\ProductType::class, function (Faker $faker) {
    return [
        'name' => 'Home and Kitchen',
    ];
});
