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
// Frontend
// Home
Route::get('/', 'Front\FrontController@home')->name('front.home');
// Single product
Route::get('/product/{slug}', 'Front\FrontController@product_single')->name('front.product_single');
// Product by category
Route::get('/category/{slug}', 'Front\FrontController@product_by_category')->name('front.product_by_category');
// Product by sub category
Route::get('/sub-category/{slug}', 'Front\FrontController@product_by_sub_category')->name('front.product_by_sub_category');

// Cart
Route::post('add-to-cart', 'Front\ShoppingController@add_to_cart')->name('cart.add');
Route::get('cart', 'Front\ShoppingController@cart')->name('cart.index');
Route::get('cart/delete/{id}', 'Front\ShoppingController@cart_delete')->name('cart.delete');
// Checkout
Route::get('cart/checkout', 'Front\CheckoutController@checkout')->name('checkout.index');
Route::post('cart/checkout/pay', 'Front\CheckoutController@pay')->name('checkout.pay');

// About us 
Route::get('about-us', 'Front\AboutUsController@index')->name('front.about_us');
// Contact
Route::get('contact', 'Front\ContactController@index')->name('front.contact');

// Authenticate route
Auth::routes();

// User home
Route::get('/home', 'HomeController@index')->name('home');

// Admin area
Route::group(['prefix' => 'admin'], function () {
    // User 
    Route::resource('user', 'Admin\User\UsersController')->except(['destroy']);
    Route::get('users/{id}', 'Admin\User\UsersController@destroy')->name('users.destroy');

    Route::get('verify/{id}', 'Admin\User\UsersController@verify')->name('verify');
    Route::get('unverify/{id}', 'Admin\User\UsersController@unverify')->name('unverify');

    Route::get('active/{id}', 'Admin\User\UsersController@active')->name('active');
    Route::get('deactive/{id}', 'Admin\User\UsersController@deactive')->name('deactive');

    Route::get('admin/{id}', 'Admin\User\UsersController@admin')->name('admin');
    Route::get('regular/{id}', 'Admin\User\UsersController@regular')->name('regular');

    Route::get('setting/change-pass', 'Admin\User\UsersController@setting')->name('setting');
    Route::put('change-pass', 'Admin\User\UsersController@changePass')->name('changePass');

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
    // Product 
    Route::resource('products', 'Product\ProductController', ['as'=>'product']);

});