<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('product_type_id')->default(0);
            $table->integer('product_category_id')->default(0);
            $table->integer('product_sub_category_id')->default(0);
            $table->integer('product_manufacturer_id')->nullable();
            $table->integer('user_id');
            $table->string('name');
            $table->string('slug');
            $table->string('model')->nullable();
            $table->string('key_features')->nullable();
            $table->text('details')->nullable();
            $table->text('description')->nullable();
            $table->text('dimension')->nullable();
            $table->string('weight')->nullable();
            $table->string('weight_unit')->nullable();
            $table->float('price', 10, 4);
            $table->integer('quantity');
            $table->integer('quantity_low_limit');
            $table->boolean('is_feature')->nullable();
            $table->boolean('is_special')->nullable();
            $table->float('special_price', 10, 4)->nullable();
            $table->boolean('special_status')->nullable()->nullable();
            $table->boolean('in_stock')->nullable()->default(0);
            $table->boolean('status')->nullable()->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
