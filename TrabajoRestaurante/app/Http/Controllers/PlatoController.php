<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    public function showData() {
        $platos = Plato::paginate(5);
        return view('platos', ['platos'=>$platos]);
    }

    public function addPlato(Request $request) {
        session_start();
        if (!isset($_SESSION['pedido'])) {
            $_SESSION['pedido'] = [];
        }
        $_SESSION['pedido'][] = [(int) $request->idPlato, (int) $request->precioPlato];
        return redirect()->route("platos",['page'=>$request->page]);
    }
}
