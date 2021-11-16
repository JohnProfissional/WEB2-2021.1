
@extends('layouts.main')

@section('titulo', 'Edição de Fornecedores')

@section('conteudo')
    
    <div id="form"> 
    
<form action="{{route('fornecedores.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome do fornecedor</label>
     <input type="text" name="nomefornecedor" id="nomefornecedor" value="{{$fornecedor->nomefornecedor}}">
     <label for="">Endereco</label>
     <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
     <label for="">Email</label>
     <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
      <input type="submit" value="Alterar">
    </form>

    </div>
@endsection('conteudo')