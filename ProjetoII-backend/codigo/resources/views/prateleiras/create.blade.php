

@extends('layouts.main')

@section('titulo', 'Cadastro de Prateleiras')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('prateleiras.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Prateleira</h3></label><br><br>

    <div class="form-group">

     <label for="">Descrição da prateleira</label>
     <input type="text" class=" @error('descricaoprateleira') is-invalid @enderror" name="descricaoprateleira" id="descricaoprateleira"><br><br>
     @error('descricaoprateleira')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
        
     <label for="">Quantidade de frascos</label>
     <input type="text" class=" @error('quantidadedefrascos') is-invalid @enderror" name="quantidadedefrascos" id="quantidadedefrascos"><br><br>
     @error('quantidadedefrascos')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID da categoria</label>
     <input type="text" class=" @error('categoria_id') is-invalid @enderror" name="categoria_id" id="categoria_id"><br><br>
     @error('categoria_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
