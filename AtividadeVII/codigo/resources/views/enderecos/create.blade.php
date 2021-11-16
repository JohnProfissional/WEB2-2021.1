
@extends('layouts.main')

@section('titulo', 'Cadastro de clientes')

@section('conteudo')
    
    <div id="form">     
    <form action="{{route('endereco.store')}}" method="post">
        @csrf 
        <label for=""><h3>Página de cadastro de Endereços</h3></label><br><br>
     <label for="">Logradouro</label>
     <input type="text" class=" @error('logradouro') is-invalid @enderror" name="logradouro" id="logradouro"><br><br>
     @error('logradouro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Bairro</label>
     <input type="text" class=" @error('bairro') is-invalid @enderror" name="bairro" id="bairro"><br><br>
     @error('bairro')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">Cidade</label>
     <input type="text" class=" @error('cidade') is-invalid @enderror" name="cidade" id="cidade"><br><br>
     @error('cidade')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">UF</label>
     <input type="text" class=" @error('uf') is-invalid @enderror" name="uf" id="uf"><br><br>
     @error('uf')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
     <label for="">ID cliente</label>
     <input type="text" class=" @error('cliente_id') is-invalid @enderror" name="cliente_id" id="cliente_id"><br><br>
     @error('cliente_id')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror 
      <input type="submit" value="Cadastrar"><br><br>
    </form>
    </div>    
@endsection('conteudo')
