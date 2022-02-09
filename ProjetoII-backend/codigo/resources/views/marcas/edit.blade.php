


@extends('layouts.main')

@section('titulo', 'Edição de Marcas')

@section('conteudo')

<div id="form">     
<form action="{{route('marcas.update', ['id' => $marca->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Nome da Marca</label>
     <input type="text" class=" @error('nomedamarca') is-invalid @enderror" name="nomedamarca" id="nomedamarca" value="{{$marca->nomedamarca}}">
     @error('nomedamarca')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')