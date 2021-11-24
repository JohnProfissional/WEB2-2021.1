
@extends('layouts.main')

@section('titulo', 'Consulta de endereços')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de consulta de endereços</h1></label><br>

@foreach ($enderecos as $endereco)
<ul>
    <li>Logradouro: {{$endereco->logradouro}}</li>
    <li>Bairro: {{$endereco->bairro}}</li>
    <li>Cidade: {{$endereco->cidade}}</li>
    <li>UF: {{$endereco->uf}}</li>
    <li>ID cliente: {{$endereco->cliente_id}}</li>
</ul>
@endforeach 
</div>

@endsection('conteudo')