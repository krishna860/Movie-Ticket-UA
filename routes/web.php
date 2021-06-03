<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// link of movie/theater/cast
Route::get('admin','App\Http\Controllers\HomeController@index2')->name('admin.index');

// link of admin/user
Route::get('/','App\Http\Controllers\HomeController@index');

Route::resource('admin/movie', 'App\Http\Controllers\MovieController');
Route::resource('admin/theater', 'App\Http\Controllers\TheaterController');
Route::resource('admin/cast', 'App\Http\Controllers\CastController');
// Route::get('user/movie', 'App\Http\Controllers\CastController');


// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user',function(){
    return view('layouts.userapp');
});

Route::get('/selectcity',[HomeController::class,'viewseat']);
Route::get('/surat',[HomeController::class,'surat']);
Route::get('/mumbai',[HomeController::class,'mumbai']);
Route::get('/ahmedabad',[HomeController::class,'ahmedabad']);
Route::get('/ahmedabad',[HomeController::class,'ahmedabad']);
Route::get('/booking',[HomeController::class,'book']);
// book ticket for route===================
Route::post('/insertBookData', [HomeController::class,'insertBookData']);
