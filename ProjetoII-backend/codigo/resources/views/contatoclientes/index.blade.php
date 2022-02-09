
@extends('layouts.main')

@section('titulo', 'Página de Contato clientes')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Contatos dos clientes</h1></label><br>
@foreach ($contatoclientes as $contatocliente)

<ul>    
    <li>Telefone do cliente: {{$contatocliente->telefone}}</li>
    <li>Email do Cliente: {{$contatocliente->email}}</li>
    <li>Whatsapp do Cliente: {{$contatocliente->whatsapp}}</li>
    <li>ID do Cliente: {{$contatocliente->cliente_id}}</li>
    <li> <a href="{{route ('contatoclientes.edit', ['id' => $contatocliente->id])}}">Editar Contato_Cliente</a></li><br>

    <form action="{{route ('contatoclientes.delete',  ['id' => $contatocliente->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
