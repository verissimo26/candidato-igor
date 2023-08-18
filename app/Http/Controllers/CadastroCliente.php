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

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        ModelsCliente::create($request->all());
        return redirect()->route('cadastro-cliente');
    }

    public function edit($id){
        $clientes = cliente::where('id',$id)->first();
        if(!empty($clientes))
        {
            return view('edit',['clientes'=>$clientes]);
        }
        else
        {
            return redirect()->route('cadastro-cliente');
        }
    }
    public function update(Request $request, $id) {
        $data = [
        'nome'=>$request->nome,
        'CPF'=>$request->CPF,
        'NASC'=>$request->NASC,
        'endereco'=>$request->endereco,
        'UF'=>$request->UF,
        'CIDADE'=>$request->CIDADE,
        ];
        cliente::where('id', $id)->update($data);
        return redirect()->route('cadastro-create');
    }
}
