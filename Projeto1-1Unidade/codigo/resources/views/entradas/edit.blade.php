
@extends('layouts.main')

@section('titulo', 'Edição de entradas')

@section('conteudo')
    
    <div id="form">     
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Valor total da nota</label>
     <input type="text" class=" @error('valortotaldanota') is-invalid @enderror" name="valortotaldanota" id="valortotaldanota" value="{{$entrada->valortotaldanota}}">
     @error('valortotaldanota')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Data da entrada</label>
     <input type="text" class=" @error('dataentrada') is-invalid @enderror" name="dataentrada" id="dataentrada" value="{{$entrada->dataentrada}}">
     @error('dataentrada')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID fornecedor</label>
     <input type="text" class=" @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id" id="fornecedor_id" value="{{$entrada->fornecedor_id}}">
     @error('fornecedor_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
      <input type="submit" value="Alterar">
    </form>
    </div>
@endsection('conteudo')
