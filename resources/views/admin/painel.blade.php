@extends('index')
   @section('content')
    <h1>Produtos</h1>
    <a href="{{ route('produtos.create') }}" class="btn btn-default" style="margin-bottom: 10px">Novo produto</a>
    <table class="table table-striped table-bordered table-home">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Acção</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}} </td>
                <td>{{$produto->descricao}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>
   @stop
