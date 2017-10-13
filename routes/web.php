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

Route::group(['middleware' => 'auth'], function(){
        Route::resource('homestay', 'HomestayController');
        Route::resource('role', 'RoleController');
        
        // Route::get('/role', 'RoleController@index')->name('role.index');
        // Route::get('/role/create', 'RoleController@create')->name('role.create');
        // Route::post('/role', 'RoleController@Store')->name('role.store');
        // Route::get('/role/{role}','RoleController@show')->name('role.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
