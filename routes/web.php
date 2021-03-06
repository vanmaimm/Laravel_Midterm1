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
Route::get('/admin/index', "Admin\DashboardController@index");
Route::get('/admin/create', "Admin\DashboardController@create");
Route::post("/admin/create","Admin\DashboardController@store");
Route::get('/home', "User\HomeController@index");