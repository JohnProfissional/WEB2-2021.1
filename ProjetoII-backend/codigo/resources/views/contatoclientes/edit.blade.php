
@extends('layouts.main')

@section('titulo', 'Edição de Contatos Clientes')

@section('conteudo')

<div id="form">     
<form action="{{route('contatoclientes.update', ['id' => $contato_cliente->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Telefone</label>
     <input type="text" class=" @error('telefone') is-invalid @enderror" name="telefone" id="telefone" value="{{$contato_cliente->telefone}}">
     @error('telefone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Email</label>
     <input type="text" class=" @error('email') is-invalid @enderror" name="email" id="email" value="{{$contato_cliente->email}}">
     @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Whatsapp</label>
     <input type="text" class=" @error('whatsapp') is-invalid @enderror" name="whatsapp" id="whatsapp" value="{{$contato_cliente->whatsapp}}">
     @error('whatsapp')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do Cliente</label>
     <input type="text" class=" @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id" value="{{$contato_cliente->cliente_id}}">
     @error('cliente_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')