@extends('layouts.main')

@section('titulo', 'Edição de clientes')

@section('conteudo')

<div id="form">     
<form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf 
        @method('PUT')
     <label for="">Nome cliente</label>
     <input type="text" class=" @error('nome') is-invalid @enderror" name="nome" id="nome" value="{{$cliente->nome}}">
     @error('nome')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Endereco</label>
     <input type="text" class=" @error('endereco') is-invalid @enderror" name="endereco" id="endereco" value="{{$cliente->endereco}}">
     @error('endereco')
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