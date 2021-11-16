
@extends('layouts.main')

@section('titulo', 'Edição de endereços')

@section('conteudo')
    
    <div id="form">    
    
<form action="{{route('endereco.update', ['id' => $endereco->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Logradouro</label>
     <input type="text" name="logradouro" id="logradouro" value="{{$endereco->logradouro}}">
     <label for="">Bairro</label>
     <input type="text" name="bairro" id="bairro" value="{{$endereco->bairro}}">
     <label for="">Cidade</label>
     <input type="text" name="cidade" id="cidade" value="{{$endereco->cidade}}">
     <label for="">UF</label>
     <input type="text" name="uf" id="uf" value="{{$endereco->uf}}">
     <label for="">ID cliente</label>
     <input type="text" name="cliente_id" id="cliente_id" value="{{$endereco->cliente_id}}">
      <input type="submit" value="Alterar">
    </form>
    </div>
@endsection('conteudo')