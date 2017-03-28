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

Route::get('asdf', function(){
	echo "Hello ";
});

Route::get('chk', 'Extra\AController@show');
Route::get('form', 'Extra\AController@showform');
Route::post('savedata', 'Extra\AController@savedata')->name('savedata');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
