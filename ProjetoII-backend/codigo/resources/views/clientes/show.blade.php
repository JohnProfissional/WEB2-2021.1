

@extends('layouts.main')

@section('titulo','Consulta de clientes')

@section('conteudo')

<div id="form">
<h1>Página de consulta de clientes</h1>
@foreach ($clientes as $cliente)
<ul>
    <li>Nome do cliente: {{$cliente->nomecliente}}</li>
    <li>CPF do Cliente: {{$cliente->cpfcliente}}</li>
    <li>RG do Cliente: {{$cliente->rgcliente}}</li>
    <li>Sexo do Cliente: {{$cliente->sexocliente}}</li>
    <li>Data de nascimento: {{$cliente->datanascimento}}</li>
    <li>Débito: {{$cliente->debito}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')