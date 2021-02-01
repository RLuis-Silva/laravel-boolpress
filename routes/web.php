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

/**
 * HOMEPAGE
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * ROTTE PER AUTENTICAZIONE: login/ registrazione
 */
Auth::routes();

/**
 * ROTTE pagine per utenti loggati
 */
// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')
        ->namespace('Admin')
        ->name('admin.')
        ->middleware('auth')
        ->group(function() {
            // home admin
            Route::get('/', 'HomeController@index')->name('home');

            // rotte Post CRUD
        });


