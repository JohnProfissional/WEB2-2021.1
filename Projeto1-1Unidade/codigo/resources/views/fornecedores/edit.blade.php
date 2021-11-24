
@extends('layouts.main')

@section('titulo', 'Edição de Fornecedores')

@section('conteudo')
    
    <div id="form"> 
    
<form action="{{route('fornecedores.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome do fornecedor</label>
     <input type="text" class=" @error('nomefornecedor') is-invalid @enderror" name="nomefornecedor" id="nomefornecedor" value="{{$fornecedor->nomefornecedor}}">
     @error('nomefornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Endereco</label>
     <input type="text" class=" @error('endereco') is-invalid @enderror" name="endereco" id="endereco" value="{{$fornecedor->endereco}}">
     @error('endereco')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Email</label>
     <input type="text" class=" @error('email') is-invalid @enderror" name="email" id="email" value="{{$fornecedor->email}}">
     @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

      <input type="submit" value="Alterar">
    </form>

    </div>
@endsection('conteudo')