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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', function () {
    return view('profiles');
});

Route::get('/myarticles', function () {
    return view('myarticles');
});

Route::get('/addmyarticle', function () {
    return view('addmyarticle');
});

Route::post('/addmyarticle', 'InsertarticlesController@store')->name('storearticle');

Route::get('/passwordreset', function () {
    return view('passwordreset');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
