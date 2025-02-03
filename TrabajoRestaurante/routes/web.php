<?php

use App\Http\Controllers\PlatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/platos', [PlatoController::class, "showData"]);
Route::get('/empresas', function() {
    return view('empresas');
});