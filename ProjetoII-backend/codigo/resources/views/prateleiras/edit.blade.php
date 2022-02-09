



@extends('layouts.main')

@section('titulo', 'Edição de Prateleiraes')

@section('conteudo')

<div id="form">     
<form action="{{route('prateleiras.update', ['id' => $prateleira->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Descrição da prateleira</label>
     <input type="text" class=" @error('descricaoprateleira') is-invalid @enderror" name="descricaoprateleira" id="descricaoprateleira" value="{{$prateleira->descricaoprateleira}}">
     @error('descricaoprateleira')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Quantidade de frascos</label>
     <input type="text" class=" @error('quantidadedefrascos') is-invalid @enderror" name="quantidadedefrascos" id="quantidadedefrascos" value="{{$prateleira->quantidadedefrascos}}">
     @error('quantidadedefrascos')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID da Categoria</label>
     <input type="text" class=" @error('categoria_id') is-invalid @enderror" name="categoria_id" id="categoria_id" value="{{$prateleira->categoria_id}}">
     @error('categoria_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')