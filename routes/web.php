<?php

use App\Models\User;
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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('/signup','UsersController@create')->name('signup');

Route::resource('users', 'UsersController');
//resource等于下面7行代码
// Route::get('/users','UsersController@index')->name('users.index');
// Route::get('users/create','UsersController@create')->name('users.create'); //有歧义的需要先定义，因为路由是根据定义的顺序来匹配的
// Route::get('users/{user}','UsersController@show')->name('users.show');

// Route::post('users/','UsersController@store')->name('users.store');
// Route::get('users/{user}/edit,UserController@edit')->name('users.edit');
// Route::patch('users/{user}','UsersController@update')->name('users.update');
// Route::delete('users/{user}','UsersController@destroy')->name('users.destroy');
