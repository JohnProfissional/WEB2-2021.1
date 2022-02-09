


@extends('layouts.main')

@section('titulo', 'Página de Prateleiras')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Prateleiras</h1></label><br>
@foreach ($prateleiras as $prateleira)

<ul>    
    <li>Descrição da Prateleira: {{$prateleira->descricaoprateleira}}</li>
    <li>Quantidade de frascos: {{$prateleira->quantidadedefrascos}}</li>
    <li>ID da Categoria: {{$prateleira->categoria_id}}</li>
    <li> <a href="{{route ('prateleiras.edit', ['id' => $prateleira->id])}}">Editar Prateleira</a></li><br>

    <form action="{{route ('prateleiras.delete',  ['id' => $prateleira->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
