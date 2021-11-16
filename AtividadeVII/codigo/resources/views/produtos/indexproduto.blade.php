
@extends('layouts.main')

@section('titulo', 'Página de produtos')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de Produtos</h1></label><br>
@foreach ($produtos as $produto)
<ul>
    <li>Nome do produto: {{$produto->nomeproduto}}</li>
    <li>Quantidade: {{$produto->quantidade}}</li>
    <li>Data de vencimento: {{$produto->datavencimento}}</li>
    <li> <a href="edit/{{$produto->id}}">Editar produto</a></li>

    <form action="{{route ('produtos.delete',  ['id' => $produto->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 
</div>

@endsection('conteudo')