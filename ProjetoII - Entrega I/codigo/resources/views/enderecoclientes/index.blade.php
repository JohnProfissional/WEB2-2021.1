
@extends('layouts.main')

@section('titulo', 'Página de Endereços dos Clientes')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de Endereços dos Clientes</h1></label><br>
@foreach ($enderecos as $endereco)
<ul>
    <li>Rua: {{$endereco->rua}}</li>
    <li>Número: {{$endereco->numero}}</li>
    <li>Bairro: {{$endereco->bairro}}</li>
    <li>Cidade: {{$endereco->cidade}}</li>
    <li>UF: {{$endereco->uf}}</li>
    <li>CEP: {{$endereco->cep}}</li>
    <li>ID do Cliente: {{$endereco->cliente_id}}</li>
    <li> <a href="{{route ('enderecoclientes.edit', ['id' => $endereco->id])}}">Editar Endereço_Cliente</a></li><br>

    <form action="{{route ('enderecoclientes.delete',  ['id' => $endereco->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>
    
</ul>
@endforeach 
</div>
@endsection('conteudo')