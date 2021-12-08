 
 @extends('layouts.main')

@section('titulo', 'Cadastro de Usuários')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('usuarios.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Usuário</h3></label><br><br>

    <div class="form-group">

     <label for="">Nome do Usuário</label>
     <input type="text" class=" @error('nomeusuario') is-invalid @enderror" name="nomeusuario" id="nomeusuario"><br><br>
     @error('nomeusuario')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
        
     <label for="">Login</label>
     <input type="text" class=" @error('login') is-invalid @enderror" name="login" id="login"><br><br>
     @error('login')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">Senha</label>
     <input type="text" class=" @error('senha') is-invalid @enderror" name="senha" id="senha"><br><br>
     @error('senha')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 

     <label for="">Cargo</label>
     <input type="text" class=" @error('cargo') is-invalid @enderror" name="cargo" id="cargo"><br><br>
     @error('cargo')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">ADM</label>
     <input type="text" class=" @error('adm') is-invalid @enderror" name="adm" id="adm"><br><br>
     @error('adm')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
