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
