<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function showData() {
        $pedidos = Pedido::paginate(10);
        return view('pedidos', ['pedidos' => $pedidos]);
    }

    public static function store($idCliente, $precioTotal = 0) {
        $pedido = Pedido::create([
            'id_cliente' => $idCliente,
            'precio_total' => $precioTotal
        ]);
        return $pedido;
    }

}
