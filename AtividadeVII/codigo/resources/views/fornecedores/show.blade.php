
@extends('layouts.main')

@section('titulo', 'Consulta de fornecedores')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consulta de fornecedores</h1></label><br>

@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nomefornecedor}}</li>
    <li>Endereco do fornecedor: {{$fornecedor->endereco}}</li>
    <li>Email do fornecedor: {{$fornecedor->email}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')