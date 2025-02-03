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
}
