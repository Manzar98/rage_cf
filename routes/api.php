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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Get Sizes
Route::get('sizes', 'SizeController@index');

// Get Single Size Details
Route::get('size/{id}', 'SizeController@show');

// Create New size
Route::post('size', 'SizeController@store');

// Create New size
Route::put('size', 'SizeController@store');

// Get all rfusers
Route::get('rfusers', 'RfusersController@index');

// Get Single RF User by rfid
Route::get('rfuser/{id}','RfusersController@show');

// Update Single RF User by rfid
Route::put('rfuser','RfusersController@store');

// Create RF user 
Route::post('rfuser','RfusersController@create');