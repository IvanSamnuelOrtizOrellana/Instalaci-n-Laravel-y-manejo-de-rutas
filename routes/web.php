<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoController; 


Route::get('/', function () {
    return view('welcome');
});


Route::get('/hola-mundo', function () {
    return view('hola');
});

// Y aquí irán las rutas de tu formulario más adelante...
