

@extends('layouts.main')

@section('titulo', 'Página de Itens Vendas')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Itens Vendas</h1></label><br>
@foreach ($itensvendas as $itensvenda)

<ul>    
    <li>Quantidade de itens: {{$itensvenda->quantidadeitens}}</li>
    <li>Valor: {{$itensvenda->valor}}</li>
    <li>Desconto: {{$itensvenda->desconto}}</li>
    <li>ID da venda: {{$itensvenda->venda_id}}</li>
    <li>ID do produto: {{$itensvenda->produto_id}}</li>
    <li> <a href="{{route ('itensvendas.edit', ['id' => $itensvenda->id])}}">Editar Itensvenda</a></li><br>

    <form action="{{route ('itensvendas.delete',  ['id' => $itensvenda->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
