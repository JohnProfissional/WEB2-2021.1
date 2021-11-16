
@extends('layouts.main')

@section('titulo', 'Consulta de itens vendas')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consultas de Itens Vendas</h1></label><br>
@foreach ($itensvendas as $itensvenda)
<ul>
    <li>Quantidade de itens: {{$itensvenda->quantidadeitens}}</li>
    <li>Valor: {{$itensvenda->valor}}</li>
    <li>Desconto: {{$itensvenda->desconto}}</li>
    <li>ID da venda: {{$itensvenda->venda_id}}</li>
    <li>ID do produto: {{$itensvenda->produto_id}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')