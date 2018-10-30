<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product\ProductCategory::class, function (Faker $faker) {
    return [
        'product_type_id' => 1,
        'name' => 'Kitchen',
    ];
});
