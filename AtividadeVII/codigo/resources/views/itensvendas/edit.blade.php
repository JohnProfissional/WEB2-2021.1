@extends('layouts.main')

@section('titulo', 'Edição de itens vendas')

@section('conteudo')
    
    <div id="form">     
<form action="{{route('itensvenda.update', ['id' => $itensvenda->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Quantidade de itens</label>
     <input type="text" name="quantidadeitens" id="quantidadeitens" value="{{$itensvenda->quantidadeitens}}">
     <label for="">Valor</label>
     <input type="text" name="valor" id="valor" value="{{$itensvenda->valor}}">
     <label for="">Desconto</label>
     <input type="text" name="desconto" id="desconto" value="{{$itensvenda->desconto}}">
     <label for=""> ID da venda</label>
     <input type="text" name="venda_id" id="venda_id">
     <label for="">ID do produto</label>
     <input type="text" name="produto_id" id="produto_id">
      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')
