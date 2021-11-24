
@extends('layouts.main')

@section('titulo', 'Consulta de produtos')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consulta de Produtos</h1></label><br>
@foreach ($produtos as $produto)
<ul>
    <li>Nome do produto: {{$produto->nomeproduto}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
    <li>Data de vencimento: {{$produto->datavencimento}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')