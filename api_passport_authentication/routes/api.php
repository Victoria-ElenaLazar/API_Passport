<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'as' => 'passport.',
    'prefix' => config('passport.path', 'oauth'),
    'namespace' => 'App\Http\Controllers',
], function (){
    Route::post('register', 'MainController@register');
    Route::post('login', 'MainController@login');
    Route::group(['middleware'=>'auth:api'], function(){
        Route::get('logout', 'MainController@logout');
        Route::get('profile', 'MainController@profile');
    });
});




