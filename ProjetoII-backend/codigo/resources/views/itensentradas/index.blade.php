

@extends('layouts.main')

@section('titulo', 'Página de Itens Entradas')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Itens Entradas</h1></label><br>
@foreach ($itensentradas as $itensentrada)

<ul>    
    <li>Preço de compra: {{$itensentrada->precocompra}}</li>
    <li>Quantidade: {{$itensentrada->quantidade}}</li>
    <li>Unidade: {{$itensentrada->unidade}}</li>
    <li>IPI: {{$itensentrada->ipi}}</li>
    <li>Frete: {{$itensentrada->frete}}</li>
    <li>ICMS: {{$itensentrada->icms}}</li>
    <li>ID da Entrada: {{$itensentrada->entrada_id}}</li>
    <li>ID do Produto: {{$itensentrada->produto_id}}</li>
    <li> <a href="{{route ('itensentradas.edit', ['id' => $itensentrada->id])}}">Editar Itensentrada</a></li><br>

    <form action="{{route ('itensentradas.delete',  ['id' => $itensentrada->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
