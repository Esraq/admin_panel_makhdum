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



///routes from admin panel

$router->group(['middleware' => 'auth'], function($router){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::Resource('/test','App\Http\Controllers\TestController');
Route::Resource('/authtest','App\Http\Controllers\AuthController');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::Resource('/crud','App\Http\Controllers\CrudController');
Route::Resource('/crud_list','App\Http\Controllers\CrudListController');

});