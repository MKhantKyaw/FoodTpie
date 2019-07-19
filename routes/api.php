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

Route::get('/products','AdminProductController@index');
Route::get('/product/{id}','AdminProductController@show');
Route::post('/product','AdminProductController@store');
Route::post('/image','AdminProductController@index');
Route::put('/product/{id}', 'AdminProductController@update');
Route::delete('/product/{id}','AdminProductController@destroy');
