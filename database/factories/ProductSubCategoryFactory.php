<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product\ProductSubCategory::class, function (Faker $faker) {
	$name = $faker->sentence(2, true);
    return [
        'product_type_id' => 1,
        'product_category_id' => 1,
        'name' => $name,
        'slug' => str_slug($name),
    ];
});
