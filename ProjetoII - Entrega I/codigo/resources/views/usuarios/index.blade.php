



@extends('layouts.main')

@section('titulo', 'Página de Usuários')

@section('conteudo')

<div id="form">

<label for=""><h1>Página de Usuários</h1></label><br>
@foreach ($usuarios as $usuario)

<ul>    
    <li>Nome do Usuário: {{$usuario->nomeusuario}}</li>
    <li>Login: {{$usuario->login}}</li>
    <li>Senha: {{$usuario->senha}}</li>
    <li>Cargo: {{$usuario->cargo}}</li>
    <li>ADM: {{$usuario->adm}}</li>    
    <li> <a href="{{route ('usuarios.edit', ['id' => $usuario->id])}}">Editar Usuario</a></li><br>

    <form action="{{route ('usuarios.delete',  ['id' => $usuario->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar"><br><br>

    </form>

</ul>
@endforeach 
</div>

@endsection('conteudo')
