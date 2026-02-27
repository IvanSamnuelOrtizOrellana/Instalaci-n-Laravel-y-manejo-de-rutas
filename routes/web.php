<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoController; 


Route::get('/', function () {   
    return view('welcome');
});


Route::get('/hola-mundo', function () {
    return view('hola');
});
// 2. Ruta GET: Cuando el usuario entra a la URL en el navegador
Route::get('/', [ContactoController::class, 'formulario_contacto']);

// 3. Ruta POST: A donde el formulario envía los datos (gracias al action="/recibe-formulario")
Route::post('/recibe-formulario', [ContactoController::class, 'recibe_formulario']);
