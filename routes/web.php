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

Route::get('/', function () {
    return view('hello');
});

Route::get('/test', 'TestController@test');

Route::post('/whoami','WhatsMyNameController@index');

Route::get('/login', function () {
    return view('login');
});

Route::post('/dologin','LoginController@index');

Route::get('/login2', function(){ return imap_fetch_overview('login2'); });
