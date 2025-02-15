<?php

namespace App\Http\Controllers;

use App\Models\EmpresaDelivery;
use Illuminate\Http\Request;

class EmpresaDeliveryController extends Controller
{
    public function showData() {
        $empresas = EmpresaDelivery::paginate(5);
        return view('empresas', ['empresas'=>$empresas]);
    }
}
