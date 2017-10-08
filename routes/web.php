<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/fbvz_sell','fbvz_sell')->name('fbvz_sell');
Route::view('/add_flat','add_flat')->name('add_flat');


Route::view('/', 'main.index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cosmetics', 'CosmeticsController@index')->name('cosmetics');
Route::get('/cosmetics/create', 'CosmeticsController@create')->name('cosmetics_create_post');
Route::get('/cosmetics/{post}', 'CosmeticsController@post')->name('cosmetics_post');

Auth::routes();


