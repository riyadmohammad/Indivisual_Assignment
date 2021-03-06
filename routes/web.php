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

//landing page route
Route::get('/', function () {
    return view('main');
});

//login route

Route::get('/system/login', 'LoginController@index')->name('login');
Route::post('/system/login', 'LoginController@store')->name('login');
Route::get('/system/logout', 'LogoutController@index')->name('logout');

Route::get('/system/register', 'RegistrationController@index')->name('register');
Route::post('/system/register', 'RegistrationController@store')->name('register');

//admin

//  adminProfileConrtroller
Route::get('/system/admin/profile', 'adminProfileConrtroller@index')->name('admin_profile');
Route::post('/system/admin/profile/{id}', 'adminProfileConrtroller@update')->name('admin_profile_update');


Route::get('/system/admin/home', 'AdminHomeController@index')->name('admin_home');
Route::get('/system/busmanager/{id}/delete', 'AdminHomeController@destroy')->name('destroy_manager');
//Route::get('/system/busmanager/{id}/validate', 'AdminHomeController@destroy')->name('validate_manager');
Route::get('/system/supportstaff/add', 'AdminHomeController@create')->name('add_manager');
Route::post('/system/supportstaff/add', 'AdminHomeController@store')->name('add_manager');

Route::get('/system/buses/add', 'AddBusesController@index')->name('add_buses');
Route::post('/system/buses/add', 'AddBusesController@store')->name('add_buses');
Route::get('/system/buses', 'AddBusesController@create')->name('view_buses');
Route::get('/system/buses/edit/{id}', 'AddBusesController@edit')->name('bus_edit');
Route::post('/system/buses/{id}', 'AddBusesController@update')->name('bus_edit_id');
Route::get('/system/buses/{id}', 'AddBusesController@destroy')->name('bus_edi_delete');

//manager

Route::get('/system/manag/profile', 'managProfileController@index')->name('manag_profile');
Route::post('/system/manag/profile/{id}', 'managProfileController@update')->name('manag_profile_update');

Route::get('/system/supportstaff/home', 'ManagerHomeController@index')->name('manager_home');
Route::get('/system/supportstaff/addCounter', 'CounterController@index')->name('add_counter');
Route::post('/system/supportstaff/addCounter', 'CounterController@store')->name('add_counter');
Route::get('/system/buscounter', 'CounterController@create')->name('view_counter');
Route::get('/system/counter/{id}', 'CounterController@destroy')->name('destroy_counter');
