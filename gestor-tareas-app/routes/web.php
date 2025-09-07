<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que contiene el middleware "web". ¡Ahora crea algo genial!
|
*/

Route::get('/', function () {
    return view('welcome');
});
