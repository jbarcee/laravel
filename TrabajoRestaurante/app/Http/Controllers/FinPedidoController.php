<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinPedidoController extends Controller
{
    public function showData() {
        session_start();
        unset($_SESSION['pedido']);
        return view('finPedido');
    }
}
