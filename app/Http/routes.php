<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// For Laravael 5 only


Route::group(['middleware' => 'web'], function () {


    Route::get('search', 'RoomController@search');

    //
    Route::post('reserve-room', 'RoomController@store');

    Route::resource('reservations', 'ReservationController');
    Route::resource('accommodations', 'AccommodationController');

    Route::controllers([
        'auth'     => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);



});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
