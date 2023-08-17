@extends('layouts.app')

@section('content')
    <div>
        <h1 class="font-bold text-xl text-center  ">Cadastro de Cliente</h1>
    </div>
    <div class="flex bg-slate-100 flex-col p-10">
        <div class="flex items-center justify-around p-4 w-full">
            <label for="">CPF</label><input>
            <label for="">NOME</label><input>
            <label for="">DATA DE NASC</label><input>
            <input type="checkbox" name="genero" value="masculino">
            <label for="genero">Masculino</label>

            <input type="checkbox" name="genero" value="feminino">
            <label for="genero">Feminino</label>

        </div>
        <div class=" mt-10 flex items-center justify-around p-4 w-full">
            <label for="">ENDEREÇO</label><input class="text-bold bg-slate-200 w-[45%]">
            <label for="">CIDADE</label><input>
            <select name="UF">
                <option value="SP">Estado</option>
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
                <option value="MG">MG</option>
                <option value="CE">CE</option>
            </select>
            <select name="CIDADE">
                <option value="SP">Cidade</option>
                <option value="SP">Guarulhos</option>
                <option value="RJ">Niteroi</option>
                <option value="MG">Salinas</option>
                <option value="CE">Fortaleza</option>
            </select>
        </div>
        <div class="flex gap-4 justify-end mr-20">
            <button class="p-3 bg-slate-900 rounded-sm font-bold text-white">Salvar</button>
            <button class="p-3 bg-slate-900 rounded-sm font-bold text-white">Limpar</button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOME </th>
                    <th scope="col">CPF</th>
                    <th scope="col">DATA DE NASC</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">UF</th>
                    <th scope="col">CIDADE</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->CPF }}</td>
                        <td>{{ $cliente->NASC }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->UF }}</td>
                        <td>{{ $cliente->CIDADE }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
