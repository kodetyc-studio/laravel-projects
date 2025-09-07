<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas de la API para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que se asigna al middleware "api". Disfruta construyendo tu API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('tasks', TaskController::class);
