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

//get route
route::get('system/login','LoginController@index')->name('login');
route::get('/home','HomeController@index');
route::get('/register','RegisterController@index')->name('register');


//post route

route::post('system/login','LoginController@verify')->name('login');
route::post('/register','RegisterController@insert')->name('register');





