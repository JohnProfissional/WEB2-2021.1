<h1>Página de consulta de itensentradas</h1>
@extends('layouts.main')

@section('titulo', 'Consulta de itens entradas')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consultas de Itens Entradas</h1></label><br>
@foreach ($itensentradas as $itensentrada)
<ul>
    <li>Preco de compra: {{$itensentrada->precocompra}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
    <li>Unidade: {{$itensentrada->unidade}}</li>
    <li>IPI: {{$itensentrada->ipi}}</li>
    <li>Frete: {{$itensentrada->frete}}</li>
    <li>ICMS: {{$itensentrada->icms}}</li>
    <li>ID entrada: {{$itensentrada->entrada_id}}</li>
    <li>ID produto: {{$itensentrada->produto_id}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')
