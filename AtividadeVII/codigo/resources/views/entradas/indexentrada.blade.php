
@extends('layouts.main')

@section('titulo', 'Página de entradas')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de Entradas</h1></label><br>
@foreach ($entradas as $entrada)
<ul>
    <li>Valor total da nota: {{$entrada->valortotaldanota}}</li>
    <li>Data da entrada: {{$entrada->dataentrada}}</li>
    <li>ID fornecedor: {{$entrada->fornecedor_id}}</li>
    <li> <a href="edit/{{$entrada->id}}">Editar entrada</a></li>

    <form action="{{route ('entradas.delete',  ['id' => $entrada->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>
    
</ul>
@endforeach 
</div>

@endsection('conteudo')