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
    Route::post('details', 'API\UserController@details');
    // return $request->user();
});
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::resource('questions', 'QuestionController');
Route::resource('catagoryes', 'CatagoryController');
Route::resource('replyes', 'ReplyController');
Route::resource('likes', 'LikeController');
