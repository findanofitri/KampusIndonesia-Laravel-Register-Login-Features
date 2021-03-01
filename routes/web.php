<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Kampus\KampusController;

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
    return view('/frontend/homepage');
});
Route::get('/user', 'UserController@index');
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');


Route::get('/ki-admin', [HomeController::class, 'index']);

// Example code for each page 
Route::get('/ki-admin/kampus/buat', [KampusController::class, 'index']);