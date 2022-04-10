<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
//use App\Http\Controllers\RedirectController;

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
Route::view('/layoutss','layoutss');
Route::view('/homes','homes');
Route::view('/abouts','abouts');
Route::view('/itemss','itemss');
Route::view('/cncts','contactss');
Route::view('/optionss','optionss');
Route::view('/optionsss','optionsss');

Route::get('/hemlo', function () {
    return "hemlo world";
});

