



@extends('layouts.main')

@section('titulo', 'Edição de Entradas')

@section('conteudo')

<div id="form">     
<form action="{{route('entradas.update', ['id' => $entrada->id])}}" method="post">
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

    <label for="">ID do Fornecedor</label>
     <input type="text" class=" @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id" id="fornecedor_id" value="{{$entrada->fornecedor_id}}">
     @error('fornecedor_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do Usuário</label>
     <input type="text" class=" @error('usuario_id') is-invalid @enderror" name="usuario_id" id="usuario_id" value="{{$entrada->usuario_id}}">
     @error('usuario_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')