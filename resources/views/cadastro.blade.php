@extends('layouts.app')

@section('content')
    <div class="h-[100px] flex justify-center items-center bg-slate-200">
        <h1 class="text-slate-800 font-bold text-xl text-center ">Cadastro de Cliente</h1>
    </div>
            <div class="p-8 text-center flex justify-center flex-col">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="px-4 mt-3 border-b-2 py-5" scope="col">#</th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">NOME </th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">CPF</th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">DATA DE NASC</th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">ENDEREÇO</th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">UF</th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">CIDADE</th>
                            <th class="px-4 mt-3 border-b-2 py-5"  scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr class="">
                                <th class="px-4 py-3" scope="row">1</th>
                                <td class="px-4 py-3">{{ $cliente->id }}</td>
                                <td class="px-4 py-3">{{ $cliente->nome }}</td>
                                <td class="px-4 py-3">{{ $cliente->CPF }}</td>
                                <td class="px-4 py-3">{{ $cliente->NASC }}</td>
                                <td class="px-4 py-3">{{ $cliente->endereco }}</td>
                                <td class="px-4 py-3">{{ $cliente->UF }}</td>
                                <td class="px-4 py-3">{{ $cliente->CIDADE }}</td>
                                <td><a href="{{ route('cadastro-edit', ['id'=>$cliente->id])}}">
                                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                      </svg>
                                    </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="flex justify-center rounded-md bg-slate-700 text-white w-[10%] p-2 items-center m-auto mt-8 hover:opacity-[0.9] ease-in-out duration-50" href="{{ route('cadastro-create') }}">Novo Cadastro</a>
            </div>
        </div>
    </div>
@endsection
