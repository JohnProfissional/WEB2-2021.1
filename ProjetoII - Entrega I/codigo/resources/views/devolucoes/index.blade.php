


@extends('layouts.main')

@section('titulo', 'Página de Devoluções')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Devolução</h1></label><br>
@foreach ($devolucoes as $devolucao)

<ul>    
    <li>Data da devolução: {{$devolucao->datadevolucao}}</li>
    <li>Descrição da devolução: {{$devolucao->descricaodadevolucao}}</li>
    <li>Quantidade devolvida: {{$devolucao->quantidadedevolvida}}</li>    
    <li>ID dos Itens vendidos: {{$devolucao->itensvendas_id}}</li>
    <li> <a href="{{route ('devolucoes.edit', ['id' => $devolucao->id])}}">Editar Devolução</a></li><br>

    <form action="{{route ('devolucoes.delete',  ['id' => $devolucao->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
