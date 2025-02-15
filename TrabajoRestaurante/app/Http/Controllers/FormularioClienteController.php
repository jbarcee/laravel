<?php

namespace App\Http\Controllers;

use App\Http\Requests\DatosCliente;
use App\Models\Cliente;
use App\Models\EmpresaDelivery;
use App\Models\Pedido;
use App\Models\Plato_Pedido;
use Illuminate\Http\Request;

class FormularioClienteController extends Controller
{
    public function managePedido(DatosCliente $request) {
        session_start();
        $precioTotal = 0;
        $validatedData = $request->validated();
        $idCliente = ClienteController::store($request->name, $request->phone, $request->card)->id;
        $idPedido = PedidoController::store()->id;
        foreach ($_SESSION['pedido'] as $plato) {
            Plato_Pedido::create([
                'id_plato' => $plato[0],
                'id_pedido' => $idPedido
            ]);
            $precioTotal += $plato[1];
        }
        Pedido::where('id', $idPedido)->update(['precio_total' => $precioTotal]);
        
        return redirect()->route('finPedido');
           
        
       

    }

    public function showData() {;
        $empresas = EmpresaDelivery::all();
        return view('formularioCliente', ['empresas' => $empresas]);
    }
}
