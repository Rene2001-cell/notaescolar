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


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('/reset',action: 'App\Http\Controllers\ResetController@reset');
Route::get('/balance', action:'App\Http\Controllers\BalanceController@show');
Route::post('/event', action:'App\Http\Controllers\EventController@store');


