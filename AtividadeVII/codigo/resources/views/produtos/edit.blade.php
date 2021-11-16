@extends('layouts.main')

@section('titulo', 'Edição de produtos')

@section('conteudo')
    
    <div id="form">     
<form action="{{route('produtos.update', ['id' => $produto->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome do produto</label>
     <input type="text" name="nomeproduto" id="nomeproduto" value="{{$produto->nomeproduto}}">
     <label for="">Quantidade</label>
     <input type="text" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
     <label for="">Data de vencimento</label>
     <input type="text" name="datavencimento" id="datavencimento" value="{{$produto->datavencimento}}">
      <input type="submit" value="Alterar">
    </form>
    </div>

@endsection('conteudo')