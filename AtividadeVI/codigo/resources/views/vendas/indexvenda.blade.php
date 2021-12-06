
@extends('layouts.main')

@section('titulo', 'Página de vendas')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de Vendas</h1></label><br>
@foreach ($vendas as $venda)
<ul>
    <li>Data da venda: {{$venda->datavenda}}</li>
    <li>Desconto total: {{$venda->descontototal}}</li>
    <li>Desconto acerto: {{$venda->descontoacerto}}</li>
    <li>Valor total: {{$venda->valortotal}}</li>
    <li>ID cliente: {{$venda->cliente_id}}</li>
    <li> <a href="{{route ('venda.edit',  ['id' => $venda->id])}}">Editar venda</a></li>

    <form action="{{route ('venda.delete',  ['id' => $venda->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 
</div>

@endsection('conteudo')
