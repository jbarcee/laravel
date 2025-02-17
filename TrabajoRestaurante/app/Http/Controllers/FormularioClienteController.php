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
        $idPedido = PedidoController::store($idCliente, $_SESSION['pedido']['precioTotal'])->id;
        foreach ($_SESSION['pedido']['platos'] as $plato) {
            try {
                Plato_Pedido::create([
                    'id_plato' => $plato,
                    'id_pedido' => $idPedido
                ]);
            }
            catch (\Exception $e) {}
        }
        
        return redirect()->route('finPedido');
           
        
       

    }

    public function showData() {;
        $empresas = EmpresaDelivery::all();
        return view('formularioCliente', ['empresas' => $empresas]);
    }
}
