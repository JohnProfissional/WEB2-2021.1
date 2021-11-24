<h1>Página de consulta de vendas</h1>
@extends('layouts.main')

@section('titulo', 'Consulta de vendas')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consulta de Vendas</h1></label><br>
@foreach ($vendas as $venda)
<ul>
    <li>Data da venda: {{$venda->datavenda}}</li>
    <li>Desconto total: {{$venda->descontototal}}</li>
    <li>Desconto acerto: {{$venda->descontoacerto}}</li>
    <li>Valor total: {{$venda->valortotal}}</li>
    <li>ID cliente: {{$venda->cliente_id}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')
