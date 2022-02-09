


@extends('layouts.main')

@section('titulo', 'Edição de Itens Vendas')

@section('conteudo')

<div id="form">     
<form action="{{route('itensvendas.update', ['id' => $itensvenda->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Quantidade de Itens</label>
     <input type="text" class=" @error('quantidadeitens') is-invalid @enderror" name="quantidadeitens" id="quantidadeitens" value="{{$itensvenda->quantidadeitens}}">
     @error('quantidadeitens')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Valor</label>
     <input type="text" class=" @error('valor') is-invalid @enderror" name="valor" id="valor" value="{{$itensvenda->valor}}">
     @error('valor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Desconto</label>
     <input type="text" class=" @error('desconto') is-invalid @enderror" name="desconto" id="desconto" value="{{$itensvenda->desconto}}">
     @error('desconto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID da Venda</label>
     <input type="text" class=" @error('venda_id') is-invalid @enderror" name="venda_id" id="venda_id" value="{{$itensvenda->venda_id}}">
     @error('venda_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do Produto</label>
     <input type="text" class=" @error('produto_id') is-invalid @enderror" name="produto_id" id="produto_id" value="{{$itensvenda->produto_id}}">
     @error('produto_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')