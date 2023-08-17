<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\Cliente as ModelsCliente;
use Illuminate\Http\Request;

class CadastroCliente extends Controller
{
    public function index () {
        $cliente = ModelsCliente::all();
        return view('cadastro',['clientes'=>$cliente]);

    }
}
