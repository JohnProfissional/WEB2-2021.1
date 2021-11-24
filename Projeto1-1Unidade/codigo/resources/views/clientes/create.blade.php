
@extends('layouts.main')

@section('titulo', 'Cadastro de clientes')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('clientes.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de clientes</h3></label><br><br>
    <div class="form-group">
     <label for="">Nome do cliente</label>
     <input type="text" class=" @error('nome') is-invalid @enderror" name="nome" id="nome"><br><br>
     @error('nome')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror    
    </div>
     <label for="">Endereço</label>
     <input type="text" class=" @error('endereco') is-invalid @enderror" name="endereco" id="endereco"><br><br>
     @error('endereco')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
     <label for="">Débito</label>
     <input type="text" class=" @error('debito') is-invalid @enderror" name="debito" id="debito"><br><br>
     @error('debito')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
