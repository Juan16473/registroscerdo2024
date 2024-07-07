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

Route::get('/', function () {
    $Registros = [ 
        [ 'nombre'=> 'Registro 7'],
        [ 'nombre' => 'Registro 9'],
        [ 'nombre' => 'Registro 10'],
        [ 'nombre' => 'Registro 5'],

    ];
    $nombre='Hector Martinez';
    return view('welcome',[ 'Registros'=> $Registros], [ 'nombre'=> $nombre]);
});

//Route :: view('/contacto','contacto')