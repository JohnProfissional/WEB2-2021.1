

@extends('layouts.main')

@section('titulo', 'Edição de Categorias')

@section('conteudo')

<div id="form">     
<form action="{{route('categorias.update', ['id' => $categoria->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Nome da Categoria</label>
     <input type="text" class=" @error('nomecategoria') is-invalid @enderror" name="nomecategoria" id="nomecategoria" value="{{$categoria->nomecategoria}}">
     @error('nomecategoria')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')