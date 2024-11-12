<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorCliente;

Route::get('/', function () {
    return view('welcome');
});


// Route::get("/clientes",function(){
//     return '<h1>Nueva Ruta clientes</h1>';  // Ruta raiz con vista de bienvenida
// });

// Route::get("/clientes/{id}", function($id){
//     return 'Mi identificacion es: '.$id;
//     });

// http://127.0.0.1:8000/clientes/1023366531
// Devuelve Mi identificacion es: 1023366531
// Variables se ven con el signo $ como arriba &id

Route::get('/clientes', [ControladorCliente::class, 'control']);

Route::get('/clientes/{id}', [ControladorCliente::class, 'cedula']);
