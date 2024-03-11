<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/show_business_category', 'Business_categoryController@show_business_category');
Route::get('/show_business_sub_category/{category}', 'Business_categoryController@show_business_sub_category');

Route::get('/get_data_your_business/{user_id}', 'BusinessController@get_data_your_business');

