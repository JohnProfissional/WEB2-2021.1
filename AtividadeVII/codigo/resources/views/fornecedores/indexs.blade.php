
@extends('layouts.main')

@section('titulo', 'Página de fornecedores')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de Fornecedores</h1></label><br>
@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nomefornecedor}}</li>
    <li>Endereco do fornecedor: {{$fornecedor->endereco}}</li>
    <li>Email do fornecedor: {{$fornecedor->email}}</li>
    <li> <a href="edit/{{$fornecedor->id}}">Editar fornecedor</a></li>

    <form action="{{route ('fornecedores.delete',  ['id' => $fornecedor->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">

    </form>
</ul>
@endforeach 
</div>

@endsection('conteudo')

