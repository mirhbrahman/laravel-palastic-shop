<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin area
Route::group(['prefix' => 'admin'], function () {
    
});

// Product route
Route::group(['prefix' => 'product'], function () {
    // Product type
    Route::resource('productTypes', 'Product\ProductTypeController', ['as'=>'product']);
    // Product category
    Route::resource('productCategories', 'Product\ProductCategoryController', ['as'=>'product']);
    // Product sub category
    Route::resource('productSubCategories', 'Product\ProductSubCategoryController', ['as'=>'product']);
    
    // Get product section by ajax request
    Route::post('p-category', 'Product\ProductSectionController@getCategory')->name('product.ajax.getCategory');
    Route::post('p-sub-category', 'Product\ProductSectionController@getSubCategory')->name('product.ajax.getSubCategory');

    // Product manufacturer
    Route::resource('productManufacturers', 'Product\ProductManufacturerController', ['as'=>'product']);
    // Product color
    Route::resource('productColors', 'Product\ProductColorController', ['as'=>'product']);
    // Product color
    Route::resource('productSizes', 'Product\ProductSizeController', ['as'=>'product']);
});

