
@extends('layouts.main')

@section('titulo', 'Cadastro de Endereço do cliente')

@section('conteudo')    
    <div id="form">   

    <form action="{{route('enderecoclientes.store')}}" method="post">
        @csrf 

        <label for=""><h3>Cadastrar Endereço do Cliente</h3></label><br><br>

    <div class="form-group">

     <label for="">Rua</label>
     <input type="text" class=" @error('rua') is-invalid @enderror" name="rua" id="rua"><br><br>
     @error('rua')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror
        
     <label for="">Número</label>
     <input type="text" class=" @error('numero') is-invalid @enderror" name="numero" id="numero"><br><br>
     @error('numero')
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
     
     <label for="">CEP</label>
     <input type="text" class=" @error('cep') is-invalid @enderror" name="cep" id="cep"><br><br>
     @error('cep')
        <div class="invalid-feedback">
            {{$message}}
        </div>
    @enderror

     <label for="">ID do Cliente</label>
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
