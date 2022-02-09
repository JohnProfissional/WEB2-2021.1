

@extends('layouts.main')

@section('titulo', 'Página de Vendas')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Vendas</h1></label><br>
@foreach ($vendas as $venda)

<ul>    
    <li>Data da venda: {{$venda->datavenda}}</li>
    <li>Desconto Total: {{$venda->descontototal}}</li>
    <li>Desconto Acerto: {{$venda->descontoacerto}}</li>
    <li>Valor Total: {{$venda->valortotal}}</li>
    <li>ID do Usuário: {{$venda->usuario_id}}</li>
    <li>ADM: {{$venda->adm}}</li>    
    <li> <a href="{{route ('vendas.edit', ['id' => $venda->id])}}">Editar Venda</a></li><br>

    <form action="{{route ('vendas.delete',  ['id' => $venda->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
