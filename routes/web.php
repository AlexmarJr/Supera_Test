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

Route::get('/cars', 'CarsController@index')->name('cars_index');
Route::get('/cars_all', 'CarsController@get_all_cars')->name('get_cars');
Route::get('/get_car/{id?}', 'CarsController@get_car')->name('get_car');
Route::post('/save_car', 'CarsController@save_car')->name('post.car');
Route::post('/update_car', 'CarsController@update_car')->name('update.car');
Route::post('/delete_car', 'CarsController@delete_car')->name('delete.car');
Route::get('/cars', 'CarsController@index')->name('cars_index');


Route::get('/maintenance', 'MaintenanceController@index')->name('maintenance_index');
Route::get('/maintenance_all', 'MaintenanceController@get_all_maintenance')->name('get_all_maintenance');
Route::get('/get_maintenance/{id?}', 'MaintenanceController@get_maintenance')->name('get_maintenance');
Route::get('/get_info_car/{id?}', 'MaintenanceController@get_info_car')->name('get_info_car');
Route::post('/maintenance', 'MaintenanceController@index')->name('maintenance_index');
Route::post('/save_maintenance', 'MaintenanceController@save_maintenance')->name('post.maintenance');
Route::post('/update_maintenance', 'MaintenanceController@update_maintenance')->name('update.maintenance');
Route::post('/delete_maintenance', 'MaintenanceController@delete_maintenance')->name('delete.maintenance');