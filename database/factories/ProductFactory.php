<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product\Product::class, function (Faker $faker) {
    return [
        'code' => str_random(10),
        'product_type_id' => 1,
        'product_category_id' => 1,
        'product_sub_category_id' => function(){
            return App\Models\Product\ProductSubCategory::all()->random();
        },
        'product_manufacturer_id' => function(){
            return App\Models\Product\ProductManufacturer::all()->random();
        },
        'user_id' => function(){
            return App\User::all()->random();
        },
        'name' => $faker->sentence(4, true),
        'model' => str_random(3) . $faker->randomNumber(),
        'key_features' => $faker->sentence(2, true),
        'datails' => $faker->paragraph(2, true),
        'description' => $faker->paragraph(2, true),
        'dimension' => $faker->numberBetween(5, 50) . ' X '. $faker->numberBetween(5, 50) . ' X ' . $faker->numberBetween(5, 50),
        'weight' => $faker->numberBetween(1, 5),
        'weight_unit' =>$faker->randomElement(array('KG', 'GRAM')),
        'price' => $faker->numberBetween(20, 1000),
        'quantity' => $faker->numberBetween(0, 1000),
        'quantity_low_limit' => $faker->numberBetween(5, 20),
        'is_feature' => $faker->numberBetween(0, 1),
        'is_special' => $faker->numberBetween(0, 1),
        'special_price' => $faker->numberBetween(10, 500),
        'special_status' => $faker->numberBetween(0, 1),
        'in_stock' => $faker->numberBetween(0, 1),
        'status' => $faker->numberBetween(0, 1),
    ];
});