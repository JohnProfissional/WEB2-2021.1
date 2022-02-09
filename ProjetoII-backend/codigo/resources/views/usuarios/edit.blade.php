

@extends('layouts.main')

@section('titulo', 'Edição de Usuários')

@section('conteudo')

<div id="form">     
<form action="{{route('usuarios.update', ['id' => $usuario->id])}}" method="post">
        @csrf 
        @method('PUT')
        
     <label for="">Nome do Usuário</label>
     <input type="text" class=" @error('nomeusuario') is-invalid @enderror" name="nomeusuario" id="nomeusuario" value="{{$usuario->nomeusuario}}">
     @error('nomeusuario')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror   

     <label for="">Login</label>
     <input type="text" class=" @error('login') is-invalid @enderror" name="login" id="login" value="{{$usuario->login}}">
     @error('login')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Senha</label>
     <input type="text" class=" @error('senha') is-invalid @enderror" name="senha" id="senha" value="{{$usuario->senha}}">
     @error('senha')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">Cargo</label>
     <input type="text" class=" @error('cargo') is-invalid @enderror" name="cargo" id="cargo" value="{{$usuario->cargo}}">
     @error('cargo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

    <label for="">ADM</label>
     <input type="text" class=" @error('adm') is-invalid @enderror" name="adm" id="adm" value="{{$usuario->adm}}">
     @error('adm')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

      <input type="submit" value="Alterar">
    </form>
</div>

@endsection('conteudo')