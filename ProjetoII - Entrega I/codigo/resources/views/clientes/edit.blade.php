
@extends('layouts.main')

@section('titulo', 'Edição de clientes')

@section('conteudo')

<div id="form">     
<form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Nome do cliente</label>
     <input type="text" class=" @error('nomecliente') is-invalid @enderror" name="nomecliente" id="nomecliente" value="{{$cliente->nomecliente}}">
     @error('nomecliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">CPF do Cliente</label>
     <input type="text" class=" @error('cpfcliente') is-invalid @enderror" name="cpfcliente" id="cpfcliente" value="{{$cliente->cpfcliente}}">
     @error('cpfcliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">RG do Cliente</label>
     <input type="text" class=" @error('rgcliente') is-invalid @enderror" name="rgcliente" id="rgcliente" value="{{$cliente->rgcliente}}">
     @error('rgcliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Sexo do Cliente</label>
     <input type="text" class=" @error('sexocliente') is-invalid @enderror" name="sexocliente" id="sexocliente" value="{{$cliente->sexocliente}}">
     @error('sexocliente')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Data de nascimento</label>
     <input type="text" class=" @error('datanascimento') is-invalid @enderror" name="datanascimento" id="datanascimento" value="{{$cliente->datanascimento}}">
     @error('datanascimento')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Débito</label>
     <input type="text" class=" @error('debito') is-invalid @enderror" name="debito" id="debito" value="{{$cliente->debito}}">
     @error('debito')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')