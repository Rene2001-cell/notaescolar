<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/users',  'App\Http\Controllers\AdminUsersController');
//Route::resource('admin/users/create','App\Http\Controllers\AdminUsersController@create')->name('admin.users.create');
Route::post('/messages',  'App\Http\Controllers\HomeController@store')->name('messages.store');
Route::get('/usuario','App\Http\Controllers\UsuarioController@vista_usuario');
