<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api', 'middleware' => 'client'], function () {
    Route::group(['prefix' => 'users'], function () {
        Route::post('login','LoginController@signIn');
        Route::post('signUp','LoginController@signUp');
        Route::get('{user}/profile','UserController@getProfile');
    });
});
