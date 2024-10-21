<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// % Gestore delle rotte, crea una nuova rotta che a seguito di una chiamata GET
// % all'indirizzo "/about" allora, invoca
// % una funzione anonima di callback che ritorni qualcosa

Route::get('/home', function () {
    return view('home');
});