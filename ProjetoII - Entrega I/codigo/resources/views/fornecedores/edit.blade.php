



@extends('layouts.main')

@section('titulo', 'Edição de Fornecedores')

@section('conteudo')

<div id="form">     
<form action="{{route('fornecedores.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Razão Social</label>
     <input type="text" class=" @error('razaosocial') is-invalid @enderror" name="razaosocial" id="razaosocial" value="{{$fornecedor->razaosocial}}">
     @error('razaosocial')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">CNPJ</label>
     <input type="text" class=" @error('cnpj') is-invalid @enderror" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}">
     @error('cnpj')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID do Usuário</label>
     <input type="text" class=" @error('usuario_id') is-invalid @enderror" name="usuario_id" id="usuario_id" value="{{$fornecedor->usuario_id}}">
     @error('usuario_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')