


@extends('layouts.main')

@section('titulo', 'Página de Marcas')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Marcas</h1></label><br>
@foreach ($marcas as $marca)

<ul>    
    <li>Nome da Marca: {{$marca->nomedamarca}}</li>
    
    <li> <a href="{{route ('marcas.edit', ['id' => $marca->id])}}">Editar Marca</a></li><br>

    <form action="{{route ('marcas.delete',  ['id' => $marca->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
