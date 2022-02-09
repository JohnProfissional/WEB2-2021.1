
@extends('layouts.main')

@section('titulo', 'Página de clientes')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de clientes</h1></label><br>
@foreach ($clientes as $cliente)

<ul>    
    <li>Nome do cliente: {{$cliente->nomecliente}}</li>
    <li>CPF do Cliente: {{$cliente->cpfcliente}}</li>
    <li>RG do Cliente: {{$cliente->rgcliente}}</li>
    <li>Sexo do Cliente: {{$cliente->sexocliente}}</li>
    <li>Data de nascimento: {{$cliente->datanascimento}}</li>
    <li>Débito: {{$cliente->debito}}</li>
    <li> <a href="{{route ('clientes.edit', ['id' => $cliente->id])}}">Editar Cliente</a></li><br>

    <form action="{{route ('clientes.delete',  ['id' => $cliente->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
