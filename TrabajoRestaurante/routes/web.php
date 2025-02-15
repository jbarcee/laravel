<?php

use App\Http\Controllers\EmpresaDeliveryController;
use App\Http\Controllers\FinPedidoController;
use App\Http\Controllers\FormularioClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/fin', [FinPedidoController::class, 'showData'])->name('finPedido');

Route::get('/form', [FormularioClienteController::class, 'showData']);
Route::get('/platos', [PlatoController::class, "showData"])->name('platos');
Route::get('/empresas', [EmpresaDeliveryController::class, "showData"]);
Route::get('/pedidos', [PedidoController::class, "showData"]);

Route::post('/managePedido', [FormularioClienteController::class, "managePedido"])->name('managePedido');

Route::post('/addPlato', [PlatoController::class, "addPlato"])->name('addPlato');






