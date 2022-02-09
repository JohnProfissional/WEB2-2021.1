
@extends('layouts.main')

@section('titulo', 'Página de categorias')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de categorias</h1></label><br>
@foreach ($categorias as $categoria)

<ul>    
    <li>Nome da categoria: {{$categoria->nomecategoria}}</li>
    
    <li> <a href="{{route ('categorias.edit', ['id' => $categoria->id])}}">Editar Categoria</a></li><br>

    <form action="{{route ('categorias.delete',  ['id' => $categoria->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
