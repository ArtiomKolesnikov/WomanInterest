<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by intim23 the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'main.index')->name('main');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cosmetics', 'CosmeticsController@index')->name('cosmetics');
Route::get('/cosmetics/create', 'CosmeticsController@create')->name('cosmetics_create_post');
Route::post('/cosmetics/create', 'CosmeticsController@post_create')->name('cosmetics_post_create');
Route::get('/cosmetics/{post}', 'CosmeticsController@post')->name('cosmetics_post');
Route::get('/cosmetics_edit/{post}', 'CosmeticsController@post_edit')->name('cosmetics_post_edit');
Route::post('/cosmetics_edit/{post}', 'CosmeticsController@post_update')->name('cosmetics_post_update');

Auth::routes();


