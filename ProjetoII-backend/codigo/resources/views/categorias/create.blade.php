

@extends('layouts.main')

@section('titulo', 'Cadastro de Categorias')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('categorias.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Categoria</h3></label><br><br>

    <div class="form-group">

     <label for="">Nome da Categoria</label>
     <input type="text" class=" @error('nomecategoria') is-invalid @enderror" name="nomecategoria" id="nomecategoria"><br><br>
     @error('nomecategoria')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
