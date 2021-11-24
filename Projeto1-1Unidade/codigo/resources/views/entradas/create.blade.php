
@extends('layouts.main')

@section('titulo', 'Cadastro de entradas')

@section('conteudo')
    
    <div id="form"> 
    <form action="{{route('entrada.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de Entradas</h3></label><br><br>
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
     <label for="">ID Fornecedor</label>
     <input type="text" class=" @error('fornecedor_id') is-invalid @enderror" name="fornecedor_id" id="fornecedor_id"><br><br>
     @error('fornecedor_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>
@endsection('conteudo')