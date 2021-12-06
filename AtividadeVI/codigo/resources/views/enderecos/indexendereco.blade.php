
@extends('layouts.main')

@section('titulo', 'Página de endereços')

@section('conteudo')

<div id="form">
<label for=""><h1>Página de endereços</h1></label><br>
@foreach ($enderecos as $endereco)
<ul>
    <li>Logradouro: {{$endereco->logradouro}}</li>
    <li>Bairro: {{$endereco->bairro}}</li>
    <li>Cidade: {{$endereco->cidade}}</li>
    <li>UF: {{$endereco->uf}}</li>
    <li>ID cliente: {{$endereco->cliente_id}}</li>
    <li> <a href="{{route ('endereco.edit', ['id' => $endereco->id)}}">Editar endereco</a></li>

    <form action="{{route ('endereco.delete',  ['id' => $endereco->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>
@endsection('conteudo')