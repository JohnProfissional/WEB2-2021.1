@extends('layouts.main')

@section('titulo', 'Edição de produtos')

@section('conteudo')
    
    <div id="form">     
<form action="{{route('produtos.update', ['id' => $produto->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome do produto</label>
     <input type="text" class=" @error('nomeproduto') is-invalid @enderror" name="nomeproduto" id="nomeproduto" value="{{$produto->nomeproduto}}">
     @error('nomeproduto')
        <div class="invalid-feedback">
            {{$message}}
        </div>
     @enderror

     <label for="">Quantidade</label>
     <input type="text" class=" @error('quantidade') is-invalid @enderror" name="quantidade" id="quantidade" value="{{$produto->quantidade}}">
     @error('quantidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
     @enderror

     <label for="">Data de vencimento</label>
     <input type="text" class=" @error('datavencimento') is-invalid @enderror" name="datavencimento" id="datavencimento" value="{{$produto->datavencimento}}">
     @error('datavencimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
     @enderror

      <input type="submit" value="Alterar">
    </form>
    </div>

@endsection('conteudo')