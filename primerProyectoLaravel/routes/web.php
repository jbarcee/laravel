<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/', [UsuarioController::class, 'welcome']);

Route::get('/indice', [UsuarioController::class, 'indice']);

Route::get('/holaMundo', function () {
    return '<h1>Hola Mundo!</h1>';
});

Route::get('/holaMundo/{persona}/{tipo?}', function ($persona, $tipo = null) {

    if ($tipo != null) {
        return '<h1>Hola '.$persona.'! Eres un '.$tipo.'</h1>';
    }else {
        return '<h1>Hola '. $persona.'</h1>';
    }

    


})->where('persona', '[a-z]+');

Route::get('/saludoPersona/{persona}/{rol?}', [UsuarioController::class, 'saludoPersona']);

Route::get('/saludarVarios/{personas}', [UsuarioController::class, 'saludarVarios']);