
@extends('layouts.main')

@section('titulo', 'Cadastro de Fornecedores')

@section('conteudo')
    
    <div id="form"> 

    <form action="{{route('fornecedores.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de Fornecedores</h3></label><br><br>
     <label for="">Nome fornecedor</label>
     <input type="text" class=" @error('nomefornecedor') is-invalid @enderror"  name="nomefornecedor" id="nomefornecedor"><br><br>
     @error('nomefornecedor')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Endereco</label>
     <input type="text" class=" @error('endereco') is-invalid @enderror" name="endereco" id="endereco"><br><br>
     @error('endereco')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">email</label>
     <input type="text" class=" @error('email') is-invalid @enderror" name="email" id="email"><br><br>
     @error('email')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>
@endsection('conteudo')