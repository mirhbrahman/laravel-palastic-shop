<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\User', 10)->create();
        factory('App\Models\Product\ProductType', 1)->create();
        factory('App\Models\Product\ProductCategory', 1)->create();
        factory('App\Models\Product\ProductSubCategory', 10)->create();
        factory('App\Models\Product\ProductManufacturer', 20)->create();
        factory('App\Models\Product\Product', 50)->create();
    }
}
