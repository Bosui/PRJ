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
    return view('TPG.index');
});
Route::get('/registracija', function () {
    return view('TPG.registracija');
})->name('registracija');

Auth::routes();

Route::get('/home', 'HomeController@index');
