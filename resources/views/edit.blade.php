@extends('layouts.app')

@section('content')
    <div>
        <a class="text-xl" href="/">Voltar</a>
        <h1 class="text-center text-xl font-bold py-6 text-slate-700">Editar Cadastro de Cliente</h1>
        <hr>
        <div class="flex justify-center">
            <form action="{{ route('cadastro-update',['id'=>$clientes->id]) }}" class="flex flex-col w-1/2" method="POST">
                @csrf
                @method('PUT')
                <label class="mt-6 text-slate-600 text-xl font-bold" for="">Nome</label><input name="nome" value="{{$clientes->nome}}"
                    placeholder="Digite o Nome" class="border-0 text-center shadow-lg bg-slate-200 rounded-lg" type="text">
                <label class="mt-6 text-slate-600 text-xl font-bold" for="">CPF</label><input name="CPF" value="{{$clientes->CPF}}"
                     class="border-0 text-center shadow-lg bg-slate-200 rounded-lg"
                    type="text">
                <label class="mt-6 text-slate-600 text-xl font-bold" for="">Nasc</label><input name="NASC" value="{{$clientes->NASC}}"
                    placeholder="Digite a data de Nascimento" class="border-0 text-center shadow-lg bg-slate-200 rounded-lg"
                    type="text">
                <label class="mt-6 text-slate-600 text-xl font-bold" for="">endereco</label><input name="endereco" {{$clientes->endereco}}"
                    placeholder="Digite o Endereço" class="border-0 text-center shadow-lg bg-slate-200 rounded-lg"
                    type="text">
                <label class="mt-6 text-slate-600 text-xl font-bold" for="">UF</label><input name="UF" {{$clientes->UF}}"
                    placeholder="Digite o Estado" class="border-0 text-center shadow-lg bg-slate-200 rounded-lg"
                    type="text">
                <label class="mt-6 text-slate-600 text-xl font-bold" for="">Cidade</label><input name="CIDADE" {{$clientes->CIDADE}}"
                    placeholder="Digite a Cidade"  class="border-0 text-center shadow-lg bg-slate-200 rounded-lg"
                    type="text">
                <input class="mt-6 bg-slate-800 text-white rounded-lg p-4 hover:scale-105 ease-in-out duration-300"
                    type="submit" value="Atualizar">
            </form>
        </div>
    </div>
@endsection
