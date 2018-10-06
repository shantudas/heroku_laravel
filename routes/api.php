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
//Route::resource('users', 'Api\v1\UsersController');



Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {
    Route::resource('users', 'UsersController');
    Route::get('article/{id}', 'BlogsController@show');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
