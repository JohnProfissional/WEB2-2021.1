

@extends('layouts.main')

@section('titulo', 'Edição de Endereços Clientes')

@section('conteudo')

<div id="form">     
<form action="{{route('enderecoclientes.update', ['id' => $endereco_cliente->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Rua</label>
     <input type="text" class=" @error('rua') is-invalid @enderror" name="rua" id="rua" value="{{$endereco_cliente->rua}}">
     @error('rua')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Número</label>
     <input type="text" class=" @error('numero') is-invalid @enderror" name="numero" id="numero" value="{{$endereco_cliente->numero}}">
     @error('numero')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Bairro</label>
     <input type="text" class=" @error('bairro') is-invalid @enderror" name="bairro" id="bairro" value="{{$endereco_cliente->bairro}}">
     @error('bairro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Cidade</label>
     <input type="text" class=" @error('cidade') is-invalid @enderror" name="cidade" id="cidade" value="{{$endereco_cliente->cidade}}">
     @error('cidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">UF</label>
     <input type="text" class=" @error('uf') is-invalid @enderror" name="uf" id="uf" value="{{$endereco_cliente->uf}}">
     @error('uf')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">CEP</label>
     <input type="text" class=" @error('cep') is-invalid @enderror" name="cep" id="cep" value="{{$endereco_cliente->cep}}">
     @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
    
    <label for="">ID do Cliente</label>
     <input type="text" class=" @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id" value="{{$endereco_cliente->cliente_id}}">
     @error('cliente_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')