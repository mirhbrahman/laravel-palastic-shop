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
