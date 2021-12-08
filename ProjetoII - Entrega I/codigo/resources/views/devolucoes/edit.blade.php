


@extends('layouts.main')

@section('titulo', 'Edição de Devoluções')

@section('conteudo')

<div id="form">     
<form action="{{route('devolucoes.update', ['id' => $devolucao->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Data da devolucao</label>
     <input type="text" class=" @error('datadevolucao') is-invalid @enderror" name="datadevolucao" id="datadevolucao" value="{{$devolucao->datadevolucao}}">
     @error('datadevolucao')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Descrição da devolução</label>
     <input type="text" class=" @error('descricaodadevolucao') is-invalid @enderror" name="descricaodadevolucao" id="descricaodadevolucao" value="{{$devolucao->descricaodadevolucao}}">
     @error('descricaodadevolucao')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Quantidade devolvida</label>
     <input type="text" class=" @error('quantidadedevolvida') is-invalid @enderror" name="quantidadedevolvida" id="quantidadedevolvida" value="{{$devolucao->quantidadedevolvida}}">
     @error('quantidadedevolvida')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ID dos Itens Vendidos</label>
     <input type="text" class=" @error('itensvendas_id') is-invalid @enderror" name="itensvendas_id" id="itensvendas_id" value="{{$devolucao->itensvendas_id}}">
     @error('itensvendas_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')