@extends('layouts.main')

@section('titulo', 'Edição de itens entradas')

@section('conteudo')
    
    <div id="form">     
<form action="{{route('itensentrada.update', ['id' => $itensentrada->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Preço de compra</label>
     <input type="text" class=" @error('precocompra') is-invalid @enderror" name="precocompra" id="precocompra" value="{{$itensentrada->precocompra}}">
     @error('precocompra')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Quantidade</label>
     <input type="text" class=" @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade" value="{{$itensentrada->quantidade}}">
     @error('quantidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Unidade</label>
     <input type="text" class=" @error('unidade') is-invalid @enderror" name="unidade" id="unidade" value="{{$itensentrada->unidade}}">
     @error('unidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">IPI</label>
     <input type="text" class=" @error('ipi') is-invalid @enderror" name="ipi" id="ipi" value="{{$itensentrada->ipi}}">
     @error('ipi')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Frete</label>
     <input type="text" class=" @error('frete') is-invalid @enderror" name="frete" id="frete" value="{{$itensentrada->frete}}">
     @error('frete')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ICMS</label>
     <input type="text" class=" @error('icms') is-invalid @enderror" name="icms" id="icms" value="{{$itensentrada->icms}}">
     @error('icms')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID entrada</label>
     <input type="text" class=" @error('entrada_id') is-invalid @enderror" name="entrada_id" id="entrada_id" value="{{$itensentrada->entrada_id}}">
     @error('entrada_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID produto</label>
     <input type="text" class=" @error('produto_id') is-invalid @enderror" name="produto_id" id="produto_id" value="{{$itensentrada->produto_id}}">
     @error('produto_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
    </div>

@endsection