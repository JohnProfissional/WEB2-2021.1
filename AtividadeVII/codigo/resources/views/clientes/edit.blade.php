@extends('layouts.main')

@section('titulo', 'Edição de clientes')

@section('conteudo')

<div id="form">     
<form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome cliente</label>
     <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="{{$cliente->endereco}}">
     <label for="">Débito</label>
     <input type="text" name="debito" id="debito" value="{{$cliente->debito}}">
      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')