



@extends('layouts.main')

@section('titulo', 'Página de Fornecedores')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Fornecedores</h1></label><br>
@foreach ($fornecedores as $fornecedor)

<ul>    
    <li>Razão Social: {{$fornecedor->razaosocial}}</li>
    <li>CNPJ: {{$fornecedor->cnpj}}</li>
    <li>ID do Usuário: {{$fornecedor->usuario_id}}</li>    
    <li> <a href="{{route ('fornecedores.edit', ['id' => $fornecedor->id])}}">Editar Fornecedor</a></li><br>

    <form action="{{route ('fornecedores.delete',  ['id' => $fornecedor->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
