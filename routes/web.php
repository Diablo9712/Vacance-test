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
Route::get('ville','VilleController@index');
Route::get('ville/create','VilleController@create');
Route::post('ville','VilleController@store');
Route::get('ville/{id}/edit','VilleController@edit');
Route::put('ville/{id}','VilleController@update');
Route::post('ville/{id}','VilleController@destroy');

Route::get('saison','SaisonController@index');
Route::get('saison/create','SaisonController@create');
Route::post('saison','SaisonController@store');
Route::get('saison/{id}/edit','SaisonController@edit');
Route::put('saison/{id}','SaisonController@update');
Route::post('saison/{id}','SaisonController@destroy');


Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/', 'HomeController@index')->name('home')->middleware('auth');

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});
