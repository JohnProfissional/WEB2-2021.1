
@extends('layouts.main')

@section('titulo', 'Cadastro de Clientes')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('clientes.store')}}" method="post">
        @csrf 
        <label for=""><h3>Cadastrar Cliente</h3></label><br><br>

    <div class="form-group">

     <label for="">Nome do Cliente</label>
     <input type="text" class=" @error('nomecliente') is-invalid @enderror" name="nomecliente" id="nomecliente"><br><br>
     @error('nomecliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror  
        
     <label for="">CPF do Cliente</label>
     <input type="text" class=" @error('cpfcliente') is-invalid @enderror" name="cpfcliente" id="cpfcliente"><br><br>
     @error('cpfcliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">RG do Cliente</label>
     <input type="text" class=" @error('rgcliente') is-invalid @enderror" name="rgcliente" id="rgcliente"><br><br>
     @error('rgcliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Sexo do Cliente</label>
     <input type="text" class=" @error('sexocliente') is-invalid @enderror" name="sexocliente" id="sexocliente"><br><br>
     @error('sexocliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Data de nascimento</label>
     <input type="text" class=" @error('datanascimento') is-invalid @enderror" name="datanascimento" id="datanascimento"><br><br>
     @error('datanascimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
     <label for="">Débito</label>
     <input type="text" class=" @error('debito') is-invalid @enderror" name="debito" id="debito"><br><br>
     @error('debito')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
