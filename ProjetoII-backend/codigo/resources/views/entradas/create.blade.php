
@extends('layouts.main')

@section('titulo', 'Cadastro de Entradas')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('entradas.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Entrada</h3></label><br><br>

    <div class="form-group">

     <label for="">Valor total da nota</label>
     <input type="text" class=" @error('valortotaldanota') is-invalid @enderror" name="valortotaldanota" id="valortotaldanota"><br><br>
     @error('valortotaldanota')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
        
     <label for="">Data da entrada</label>
     <input type="text" class=" @error('dataentrada') is-invalid @enderror" name="dataentrada" id="dataentrada"><br><br>
     @error('dataentrada')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID do Fornecedor</label>
     <input type="text" class=" @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id" id="fornecedor_id"><br><br>
     @error('fornecedor_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">ID do Usuário</label>
     <input type="text" class=" @error('usuario_id') is-invalid @enderror" name="usuario_id" id="usuario_id"><br><br>
     @error('usuario_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
