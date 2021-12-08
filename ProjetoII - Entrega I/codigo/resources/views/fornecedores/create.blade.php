
@extends('layouts.main')

@section('titulo', 'Cadastro de Fornecedores')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Cliente</h3></label><br><br>

    <div class="form-group">

     <label for="">Razao Social</label>
     <input type="text" class=" @error('razaosocial') is-invalid @enderror" name="razaosocial" id="razaosocial"><br><br>
     @error('razaosocial')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
        
     <label for="">CNPJ</label>
     <input type="text" class=" @error('cnpj') is-invalid @enderror" name="cnpj" id="cnpj"><br><br>
     @error('cnpj')
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
