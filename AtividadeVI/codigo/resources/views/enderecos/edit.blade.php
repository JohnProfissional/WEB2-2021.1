
@extends('layouts.main')

@section('titulo', 'Edição de endereços')

@section('conteudo')
    
    <div id="form">    
    
<form action="{{route('endereco.update', ['id' => $endereco->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Logradouro</label>
     <input type="text" class=" @error('logradouro') is-invalid @enderror" name="logradouro" id="logradouro" value="{{$endereco->logradouro}}">
     @error('logradouro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Bairro</label>
     <input type="text" class=" @error('bairro') is-invalid @enderror" name="bairro" id="bairro" value="{{$endereco->bairro}}">
     @error('bairro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Cidade</label>
     <input type="text" class=" @error('cidade') is-invalid @enderror" name="cidade" id="cidade" value="{{$endereco->cidade}}">
     @error('cidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">UF</label>
     <input type="text" class=" @error('uf') is-invalid @enderror" name="uf" id="uf" value="{{$endereco->uf}}">
     @error('uf')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">ID cliente</label>
     <input type="text" class=" @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id" value="{{$endereco->cliente_id}}">
     @error('cliente_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
    </div>
@endsection('conteudo')