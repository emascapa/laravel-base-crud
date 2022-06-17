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


/* 

ESERCIZIOOO

Create un nuovo progetto Laravel 7 e tramite gli appositi comandi artisan 
create un model con relativa migration e un resource controller. 
Iniziate a definire le operazioni CRUD per gestire un archivio di fumetti.
Bonus: creare il seeder per la tabella comics utilizzando i dato qui sotto.


*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comics', 'ComicController@index')->name('comics.index');

Route::get('/comics/create', 'ComicController@create')->name('comics.create');


Route::post('/comics', 'ComicController@store')->name('comics.store');

Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');

Route::get('/comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');

Route::put('/comics/{comic}', 'ComicController@update')->name('comics.update');


